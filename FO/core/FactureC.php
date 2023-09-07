<?php

include_once '../../Config.php';

function ajouter($e)
{
  $db=Config::getConnexion();
  $sql="INSERT INTO facture(numf,quantite,unite,description,numeroc)
  values('".$e->getnumf()."','".$e->getquantite()."','".$e->getunite()."'
  ,'".$e->getdescription()."','".$e->getnumeroc()."')";
  $db->query($sql);
}

function afficher()
{
  $db=Config::getConnexion();
  $sql="SELECT * FROM facture";
  $resultat=$db->query($sql);
  return $resultat->fetchAll();
}

function supprimer($id)
{
  $db=Config::getConnexion();
  $sql="DELETE FROM  facture WHERE numf=".$id;
  $db->exec($sql);
}

function rechercher($c){
  $db=Config::getConnexion();
  $sql="SELECT * FROM facture WHERE numf=".$c;
  $resultat=$db->query($sql);
  return $resultat->fetchALL();
}

function modifier($id)
{
  $db=Config::getConnexion();
  $sql = 'UPDATE facture SET quantite="'.$id->getquantite().'", unite="'.$id->getunite().
  '",description="'.$id->getdescription().'",numeroc="'.$id->getnumeroc().'" WHERE numf="'
  .$id->getnumf().'"';
  $db->exec($sql);
}

function afficherDESC()
{
  $sql="select * from facture ORDER BY quantite DESC";
  $db=Config::getConnexion();
  return ($db->query($sql));

}

function afficherASC()
{
  $db=Config::getConnexion();
  $sql="select * from facture ORDER BY quantite ASC";
  return ($db->query($sql));
}

?>
