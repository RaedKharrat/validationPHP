<?PHP

require_once '../../config.php';
require_once "../entities/utilisateur.php";
require_once "../core/utilisateurC.php";
require_once '../core/UserController.php';

if (isset($_POST['email']) and isset($_POST['mdp'])) {
    $email = ($_POST['email']);
    $mdpWCrypt = ($_POST['mdp']);
    $mdp = crypt($mdpWCrypt, "$6$rounds=5000$macleapersonnaliseretagardersecret$");

    if (login($email, $mdp)) {
        header('Location:  index.php');
    } else {
        if (!findUser($email, $mdpWCrypt)) {
            header('Location:  login.php');
        } else {
            header('Location:  index.php');
        }
    }
} else {
    echo "vérifier les champs";
}
//*/

?>