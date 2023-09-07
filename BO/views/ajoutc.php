<?php

include_once '../core/CommandeC.php';

if(isset($_POST['Ajouter']))
{
  $soi=new commande($_POST['numc'],$_POST['receveur'],$_POST['transit'],$_POST['modalite'],$_POST['prix']);
  ajouter($soi);
}

header('LOCATION:ajoutc1.html');
?>
