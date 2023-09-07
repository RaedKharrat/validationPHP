<?PHP
include "../../config.php";


function facebookShare($id)
{
    $sql = "update achivement set ptfid=ptfid+1 where idClient=" . $id;
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->execute();
}


function ajouterNv($id)
{
    $sql = "insert into achivement (idClient,ptfid,type) values (:idClient,:ptfid,:type)";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);

        $req->bindValue(':idClient', $id);
        $req->bindValue(':ptfid', 5);
        $req->bindValue(':type', "debutant");
        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}

function recupererAchivemet($id)
{
    $sql = "SELECT * from achivement where id='$id'";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function recupererAchivemetClient($id)
{
    $sql = "SELECT * from achivement where idClient=" . $id;
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

?>
