<?php

require_once '../../config.php';

function ajouterProduitNote(ProduitNote $ProdNote)
{
  $db=config::getConnexion();
  $sql="insert into produitnote(idprodnote,comment,rating) values(?,?,?)";
  $req=$db->prepare($sql);
  $req->bindvalue(1,$ProdNote->getIdProdNote());
  $req->bindvalue(2,$ProdNote->getComment());
  $req->bindvalue(3,$ProdNote->getRating());

  $req->execute();
}

function afficherProduitNote()
{
  $db=config::getConnexion();
  $sql="select pn.id,p.titre, pn.comment, pn.rating from produitnote pn, produit p where pn.idprodnote=p.id";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function numberComments()
{
  $db=config::getConnexion();
  $sql="select count(*) from produitnote";
  $res=$db->query($sql);
  return $res->fetchColumn();
}

function supprimerProduitNote(int $idProdNote)
{
  $db=config::getConnexion();
  $sql="delete from produitnote where id=:idProdNote";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdNote',$idProdNote);

  $req->execute();
}

function modifierProduitNote(ProduitNote $newProdNote)
{
  $db=config::getConnexion();
  $sql="update produitnote set comment=:comment, rating=:rating where id=:idProdNote";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdNote',$newProdNote->getId());
  $req->bindvalue(':comment',$newProdNote->getComment());
  $req->bindvalue(':rating',$newProdNote->getRating());

  $req->execute();
}

?>
