<?php

require_once '../../config.php';

function ajouterEspace(Espace $esp)
{

  $db=config::getConnexion();
  $sql="insert into espace(nbplace) values(?)";
  $req=$db->prepare($sql);
  $req->bindvalue(1,$esp->getNbPlace());

  $req->execute();

}

function afficherEspace()
{
  $db=config::getConnexion();
  $sql="select nbplace,count(*) as tot from espace group by nbplace";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function numberEspaces()
{
  $db=config::getConnexion();
  $sql="select count(*) from espace";
  $res=$db->query($sql);
  return $res->fetchColumn();
}

function supprimerEspace(int $nbPlaces)
{
  $db=config::getConnexion();
  $sql="select idPlace from espace where nbplace={$nbPlaces}";
  $res=$db->query($sql);
  $idPlace=$res->fetchColumn();
  $sql="delete from espace where idPlace=:idPlace";
  $req=$db->prepare($sql);
  $req->bindvalue(':idPlace',$idPlace);

  $req->execute();
}

function modifierEspace(Espace $newEspace)
{
  $db=config::getConnexion();
  $sql="update espace set nbPlace=:nbPlace where idPlace=:idPlace";
  $req=$db->prepare($sql);
  $req->bindvalue(':idPlace',$newEspace->getIdPlace());
  $req->bindvalue(':nbPlace',$newEspace->getNbPlace());

  $req->execute();
}

function emptyPlaces(int $nbPlaces)
{
  $db=config::getConnexion();
  $sql="update extra set value=:newValue where param='nbEspaceVide'";
  $req=$db->prepare($sql);
  $req->bindvalue(':newValue',$nbPlaces);

  $req->execute();
}

?>
