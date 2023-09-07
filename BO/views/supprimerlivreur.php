<?PHP
include "../../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["login"])){
	$livreurC->supprimerlivreur($_POST["login"]);
	header('Location: b.php');
}

?>
