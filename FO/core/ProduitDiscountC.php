<?php

require_once '../../config.php';

function afficherProduitDiscount()
{
  $db=config::getConnexion();
  $sql="select * from produitdiscount";
  $res=$db->query($sql);
  return $res->fetchAll();
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
