<?PHP
require_once "../../config.php";

function afficherlivreur ($livreur){
	echo "cinL: ".$livreur->getcinL()."<br>";
	echo "login: ".$livreur->getlogin()."<br>";
	echo "mdp: ".$livreur->getmdp()."<br>";
	echo "salaire: ".$livreur->getsalaire()."<br>";

}

function ajouterlivreur($livreur){
	$sql="insert into livreur (login,mdp,salaire,cinL) values (:login, :mdp,:salaire,:cinL)";
	$db = config::getConnexion();
	try{
		$req=$db->prepare($sql);

		$login=$livreur->getlogin();
		$mdp=$livreur->getmdp();
		$salaire=$livreur->getsalaire();
		$cinL=$livreur->getcinL();

		$req->bindValue(':cinL',$cinL);
		$req->bindValue(':login',$login);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':salaire',$salaire);

		$req->execute();

	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}

}

function afficherlivreurs(){
	//$sql="SElECT * From livraison e inner join formationphp.livreur a on e.login= a.livreur";
	$sql="SElECT * From livreur";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
function supprimerlivreur($login){
	$sql="DELETE FROM Livreur where login= :login";
	$db = config::getConnexion();
	$req=$db->prepare($sql);
	$req->bindValue(':login',$login);
	try{
		$req->execute();
		// header('Location: index.php');
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}
function modifierlivreur($livreur,$login){
	$sql="UPDATE Livreur SET login=:loginn, mdp=:mdp,salaire=:salaire,cinL=:cinL WHERE login=:login";

	$db = config::getConnexion();
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{
		$req=$db->prepare($sql);
		$loginn=$livreur->getlogin();
		$mdp=$livreur->getmdp();
		$salaire=$livreur->getsalaire();
		$cinL=$livreur->getcinL();

		$datas = array(':loginn'=>$loginn, ':login'=>$login, ':mdp'=>$mdp,':salaire'=>$salaire,':cinL'=>$cinL);
		$req->bindValue(':loginn',$loginn);
		$req->bindValue(':login',$login);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':salaire',$salaire);
		$req->bindValue(':cinL',$cinL);

		$s=$req->execute();

		// header('Location: index.php');
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
		echo " Les datas : " ;
		print_r($datas);
	}

}
function recupererlivreur($login){
	$sql="SELECT * from Livreur where login='{$login}'";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}

function rechercherListelivreurs($cinL){
	$sql="SELECT * from livraison where mail=$cinL";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}



function archiverlivreur($livreur){
	$sql="insert into archive_livreur (login,mdp,salaire,cinl) values (:login, :mdp,:salaire,:cinl)";
	$db = config::getConnexion();
	try{
		$req=$db->prepare($sql);

		$login=$livreur->getlogin();
		$mdp=$livreur->getmdp();
		$salaire=$livreur->getsalaire();
		$cinl=$livreur->getcinl();

		$req->bindValue(':login',$login);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':salaire',$salaire);
		$req->bindValue(':cinl',$cinl);

		$req->execute();

	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}

}

?>
