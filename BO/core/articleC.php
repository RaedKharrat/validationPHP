<?PHP

function ajouterArticle($article)
{
    $sql = "insert into article (image,titre,date,contenue,archive) values (:image,:titre,:date,:contenue,:archive)";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $image = $article->getImage();
        $titre = $article->getTitre();
        $contenue = $article->getContenue();
        $date = date('y-m-d');
        $archive = 0;
        $req->bindValue(':image', $image);
        $req->bindValue(':titre', $titre);
        $req->bindValue(':contenue', $contenue);
        $req->bindValue(':date', $date);
        $req->bindValue(':archive', $archive);

        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}

function ajouterArticleimg($titre, $filename)
{
    $sql = "UPDATE article SET image=:image WHERE titre=:titre";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $req->bindValue(':titre', $titre);
        $req->bindValue(':image', $filename);
        $req->execute();
    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}

function afficherArticles()
{
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql = "SElECT * From article where archive=0";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function afficherArticle($id)
{
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql = "SElECT * From article where id=" . $id;
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function afficherArticlesAdmin()
{
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql = "SElECT * From article";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function archiverArticle($id)
{
    $sql = "UPDATE article SET archive=1 where id= :id";
    $db = config::getConnexion();
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);
    try {
        $req->execute();
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}


function ajouterCommentaire($id, $contenue, $user)
{
    $sql = "insert into commentaire (idUser,idArticle,date,contenue,visible) values (:idUser,:idArticle,:date,:contenue,true)";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $date = date('y-m-d');

        $req->bindValue(':idUser', $user);
        $req->bindValue(':idArticle', $id);
        $req->bindValue(':contenue', $contenue);
        $req->bindValue(':date', $date);

        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }
}

function afficherCommentaires($id)
{
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql = "SElECT * From commentaire where idArticle=" . $id;
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function numberArticles()
{
    $db = config::getConnexion();
    $sql = "select count(*) from article";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

?>