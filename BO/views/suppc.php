<?php

include_once '../core/CommandeC.php';

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['numc'];
	supprimer($id);
}

header('LOCATION:suppc1.html');
?>
