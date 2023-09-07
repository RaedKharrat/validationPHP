<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

$getcin=$_GET["cin"];
update($getcin);
header('Location: testMail.php');
//header('Location: index.php');
?>
