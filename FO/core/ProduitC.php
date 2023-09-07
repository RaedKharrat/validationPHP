<?php

require_once '../../config.php';

function afficherProduit()
{
  $db=config::getConnexion();
  $sql="select * from produit";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function afficherProduitMenu()
{
  $db=config::getConnexion();
  $sql="select * from produit where categorie='menu'";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function afficherProduitShop()
{
  $db=config::getConnexion();
  $sql="select * from produit where categorie='shop'";
  $res=$db->query($sql);
  return $res->fetchAll();
}

function getProduitById(int $id)
{
  $db=config::getConnexion();
  $sql="select * from produit where id={$id}";
  $res=$db->query($sql);
  $row=$res->fetch();
  return new Produit($row['id'],$row['titre'],$row['description'],$row['photo'],$row['categorie'],$row['soustype'],$row['date'],$row['prix']);

}

function getLastProduct()
{
  $db=config::getConnexion();
  $sql="select * from produit order by date asc";
  $res=$db->query($sql);
  $row=$res->fetch();
  return new Produit($row['id'],$row['titre'],$row['description'],$row['photo'],$row['categorie'],$row['soustype'],$row['date'],$row['prix']);

}

?>
