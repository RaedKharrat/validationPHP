<?PHP

include "../../entities/livraison.php";
include "../../core/livraisonC.php";


if (isset($_POST['cin'])){

$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_POST['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$ville=$row['ville'];
		$mail=$row['mail'];
		$postal=$row['postal'];
		$etat=$row['etat'];
	}
$livraison1=new livraison($cin,$nom,$prenom,$ville,$mail,$postal,$etat);
$livraison1C=new livraisonC();
function archiverlivraison($livraison1C){
		$sql="insert into archive_liv (cin,nom,prenom,ville,mail,postal,etat) values (:cin,:nom,:prenom,:ville,:mail,:postal,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livraison->getcin();
        $nom=$livraison->getnom();
        $prenom=$livraison->getprenom();
        $ville=$livraison->getville();
		$mail=$livraison->getmail();
		$postal=$livraison->getpostal();
		$etat=$livraison->getetat();

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':postal',$postal);
		$req->bindValue(':etat',$etat);


            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
header('Location: affiche_archive.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>