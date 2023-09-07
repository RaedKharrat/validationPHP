<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['ville']) and isset($_POST['postal']) and isset($_POST['etat'])){
	$livraison1=new livraison($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['ville'],$_POST['postal'],$_POST['etat']);

	ajouterlivraison($livraison1);
	header('Location: index.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
