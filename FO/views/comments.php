<?php

require_once '../core/ProduitNoteC.php';
require_once '../entities/ProduitNote.php';

$idProd=$_POST['idComments'];
$msg=$_POST['msg'];
$note=$_POST['nbStars'];

//var_dump($_POST);

ajouterProduitNote(new ProduitNote($idProd,$msg,$note));

header("location: product-single.php?id={$idProd}");

?>
