<?PHP
require_once "../../config.php";

function update($cin){
	$sql="UPDATE livraison SET etat='1' WHERE cin=$cin";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{


		$req->execute();

		// header('Location: index.php');
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
		echo " Les datas : " ;
		print_r($datas);
	}

}

function afficherlivraison ($livraison){
	echo "cin: ".$livraison->getcin()."<br>";
	echo "nom: ".$livraison->getnom()."<br>";
	echo "Prénom: ".$livraison->getprenom()."<br>";
	echo "date fin: ".$livraison->getmail()."<br>";
	echo "ville: ".$livraison->getville()."<br>";
	echo "postal: ".$livraison->getpostal()."<br>";
	echo "etat: ".$livraison->getetat()."<br>";


}

function ajouterlivraison($livraison){
	$sql="insert into livraison (cin,nom,prenom,ville,mail,postal,etat) values (:cin,:nom,:prenom,:ville,:mail,:postal,:etat)";
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

function afficherlivraisons(){
	//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.cin= a.cin";
	$sql="SElECT * From livraison";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function afficher_archive_livraisons(){
	//$sql="SElECT * From livraison e inner join formationphp.livraison a on e.cin= a.cin";
	$sql="SElECT * From archive_liv";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function supprimerlivraison($cin){
	$sql="DELETE FROM livraison where cin= :cin";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':cin',$cin);
	try{
		$req->execute();
		// header('Location: index.php');
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function modifierlivraison($livraison,$cin){
	$sql="UPDATE livraison SET cin=:cinn, nom=:nom,prenom=:prenom,ville=:ville,mail=:mail,postal=:postal,etat=:etat WHERE cin=:cin";

	$db = config::getConnexion();
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{
		$req=$db->prepare($sql);
		$cinn=$livraison->getcin();
		$nom=$livraison->getnom();
		$prenom=$livraison->getprenom();
		$ville=$livraison->getville();
		$mail=$livraison->getmail();
		$postal=$livraison->getpostal();
		$etat=$livraison->getetat();

		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':ville'=>$ville,':mail'=>$mail ,':postal'=>$postal,':etat'=>$etat);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':postal',$postal);
		$req->bindValue(':etat',$etat);


		$s=$req->execute();

		// header('Location: index.php');
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
		echo " Les datas : " ;
		print_r($datas);
	}

}
function recupererlivraison($cin){
	$sql="SELECT * from livraison where cin=$cin";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());

		$to       = 'hammari123@gmail.com';
		$subject  = 'Confirmation de livraison!!';
		$msg="Votre livraison a été acceptée";
		$headers  = 'From: Obladi.coffee@gmail.com' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/html; charset=utf-8';
		if(mail($to, $subject, $msg, $headers))
		echo "Email sent";
		else
		echo "Email sending failed";
		//mail("mohamed.khammeri@esprit.tn","New Product in the house!!",$msg);
	}
}

/*function archiverlivraison($livraison){
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
function rechercherListeEmployes($tarif){
$sql="SELECT * from employe where tarifHoraire=$tarif";
$db = config::getConnexion();
try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
die('Erreur: '.$e->getMessage());
}
}*/







?>
