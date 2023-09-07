<?PHP

function ajouterTeam($a, $b, $c)
{


    $sql = "insert into team (nom,role,image) values (:nom,:role,:image)";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);

        $req->bindValue(':nom', $a);
        $req->bindValue(':role', $b);
        $req->bindValue(':image', $c);


        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }

}

function ajouterTeamimg($filename, $nom)
{
    $sql = "UPDATE team SET image=:image WHERE nom=:nom";
    $db = config::getConnexion();
    try {

        $req = $db->prepare($sql);
        $req->bindValue(':image', $filename);

        $req->bindValue(':nom', $nom);


        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }

}

function afficherTeam()
{

    $sql = "SElECT * From team  ";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());

    }
}

?>