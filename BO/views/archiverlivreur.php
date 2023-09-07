<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['login'])){

  $result=recupererlivreur($_POST['login']);
  foreach($result as $row){
    $login=$row['login'];
    $mdp=$row['mdp'];
    $salaire=$row['salaire'];
    $cinl=$row['cinl'];

  }
  $livreur1=new livreur($login,$mdp,$salaire,$cinl);
  archiverlivreur($livreur1);
  header('Location: affiche_archive.php');

}else{
  echo "vérifier les champs";
}
//*/

?>
