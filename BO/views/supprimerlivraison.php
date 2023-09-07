<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["cin"])){
	$livraisonC->supprimerlivraison($_POST["cin"]);
	header('Location: a.php');
}

?>
