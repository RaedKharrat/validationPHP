<?php

include_once '../core/FactureC.php';

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['numf'];
	supprimer($id);
}

header('LOCATION:suppf1.html');
?>
