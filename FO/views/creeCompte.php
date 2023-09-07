<?PHP

require_once '../../Config.php';
require_once "../entities/utilisateur.php";
require_once "../core/utilisateurC.php";


if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['dateNaissance']) and isset($_POST['mdp']) and isset($_POST['numTel']) and isset($_POST['region']) and isset($_POST['prof'])) {

    $u = new utilisateur($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['dateNaissance'], $_POST['mdp'], $_POST['numTel'], $_POST['region'], $_POST['prof'], true, 0);

    creerCompte($u);

    $sql = "SElECT * From utilisateur where email='" . $_POST['email'] . "'";

    $db = config::getConnexion();

    $liste = $db->query($sql);

    foreach ($liste as $row) {
        $id = $row['id'];
    }
    $sql = "insert into achivement (idClient,ptfid,type) values (:idClient,:ptfid,:type)";

    $req = $db->prepare($sql);

    $req->bindValue(':idClient', $id);
    $req->bindValue(':ptfid', 5);
    $req->bindValue(':type', "debutant");
    $req->execute();


    header('Location: login.php');

} else {
    echo "vérifier les champs";
}
//*/

?>