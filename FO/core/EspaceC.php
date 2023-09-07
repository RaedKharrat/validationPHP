<?php

require_once '../../config.php';

function ajouterEspace(Espace $esp)
{

  $db=config::getConnexion();
  $sql="insert into espace values(?)";
  $req=$db->prepare($sql);
  $req->bindvalue(1,$esp->getNbPlace());

  $req->execute();

}

function afficherEspace()
{
  $db=config::getConnexion();
  $sql="select * from espace";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function supprimerEspace(int $idPlace)
{
  $db=config::getConnexion();
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

?>
