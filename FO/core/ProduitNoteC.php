<?php

require_once '../../config.php';

function ajouterProduitNote(ProduitNote $ProdNote)
{
  //notification if 5 stars
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
  $sql="select * from produitnote";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function supprimerProduitNote(int $idProdNote)
{
  $db=config::getConnexion();
  $sql="delete from produitnote where idProdNote=:idProdNote";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdNote',$idProdNote);

  $req->execute();
}

function modifierProduitNote(ProduitNote $newProdNote)
{
  $db=config::getConnexion();
  $sql="update produitnote set comment=:comment, rating=:rating where idProdNote=:idProdNote";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdNote',$newProdNote->getIdProdNote());
  $req->bindvalue(':comment',$newProdNote->getComment());
  $req->bindvalue(':rating',$newProdNote->getRating());


  $req->execute();
}

?>
