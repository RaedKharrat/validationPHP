<?PHP
include "../core/livraisonC.php";
if (isset($_POST["cin"])){
	supprimerlivraison($_POST["cin"]);
	header('Location: livreur.php');
}

?>
