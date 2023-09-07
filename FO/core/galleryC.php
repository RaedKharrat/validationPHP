<?PHP

function ajouterGallery($filename, $nom)
{


    $sql = "insert into gallery (image,nom) values (:image,:nom)";
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

function ajouterGalleryimg($filename, $nom)
{
    $sql = "UPDATE gallery SET image=:image WHERE nom=:nom";
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

function afficherGallery()
{

    $sql = "SElECT * From gallery  ";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());

    }
}

?>