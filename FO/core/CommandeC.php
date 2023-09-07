<?php

include_once '../../Config.php';

function ajouter($e)
{
  $db=Config::getConnexion();
  $sql="INSERT INTO commande(numc,receveur,transit,modalite,prix)
  values('".$e->getnumc()."','".$e->getreceveur()."',
  '".$e->gettransit()."','".$e->getmodalite()."','".$e->getprix()."')";
  $db->query($sql);


}

function afficher()
{
  $db=Config::getConnexion();
  $sql="SELECT * FROM commande";
  $resultat=$db->query($sql);
  return $resultat->fetchAll();
}

function supprimer($id)
{
  $db=Config::getConnexion();
  $sql="DELETE FROM  commande WHERE numc=".$id;
  $db->exec($sql);
}

function rechercher($c){
  $db=Config::getConnexion();
  $sql="SELECT * FROM commande WHERE numc=".$c;
  $resultat=$db->query($sql);
  return $resultat->fetchALL();
}

function modifier($id)
{
  $db=Config::getConnexion();
  $sql = 'UPDATE commande SET receveur="'.$id->getreceveur().
  '", transit="'.$id->gettransit().'",modalite="'.$id->getmodalite().
  '",prix="'.$id->getprix().'" WHERE numc="'.$id->getnumc().'"';
  $db->exec($sql);
}

function statCommande()
{
  $db=Config::getConnexion();
  $sql = "SELECT * FROM commande";
  $res=$db->query($sql);
  $chart_data = '';
  while($row = $res->fetch())
  {
    $chart_data .= "{ numc:'".$row["numc"]."', prix:".$row["prix"]."}, ";
  }
  return $chart_data;
}

?>
