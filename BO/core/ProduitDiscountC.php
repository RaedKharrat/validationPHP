<?php

require_once '../../config.php';

function ajouterProduitDiscount(ProduitDiscount $ProdDisc)
{

  $db=config::getConnexion();
  $sql="insert into produitdiscount values(?,?)";
  $req=$db->prepare($sql);
  $req->bindvalue(1,$ProdDisc->getIdProdDiscount());
  $req->bindvalue(2,$ProdDisc->getDiscount());

  $req->execute();
}

function afficherProduitDiscount()
{
  $db=config::getConnexion();
  $sql="select * from produitdiscount";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function supprimerProduitDiscount(int $idProdDiscount)
{
  $db=config::getConnexion();
  $sql="delete from produitdiscount where idProdDiscount=:idProdDiscount";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdDiscount',$idProdDiscount);

  $req->execute();
}

function modifierProduitDiscount(ProduitDiscount $newProdDiscount)
{
  $db=config::getConnexion();
  $sql="update produitdiscount set discount=:discount where idProdDiscount=:idProdDiscount";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdDiscount',$newProdDiscount->getIdProdDiscount());
  $req->bindvalue(':discount',$newProdDiscount->getDiscount());

  $req->execute();
}

function existDiscount($id)
{
  $db=config::getConnexion();
  $sql="select * from produitdiscount where idProdDiscount=:idProdDiscount";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdDiscount',$id);

  $req->execute();
  if($row=$req->fetch())
    return true;
  return false;
}

function getProduitDiscountById($id)
{
  $db=config::getConnexion();
  $sql="select * from produitdiscount where idProdDiscount=:idProdDiscount";
  $req=$db->prepare($sql);
  $req->bindvalue(':idProdDiscount',$id);

  $req->execute();
  $row=$req->fetch();
  return new ProduitDiscount($row['idproddiscount'],$row['discount']);
}

?>
