<?php

require_once '../../config.php';

function ajouterProduit​(Produit $prod)
{

    $db = config::getConnexion();
    $sql = "insert into produit(titre,description,photo,categorie,soustype,prix) values(?,?,?,?,?,?)";
    $req = $db->prepare($sql);
    $req->bindvalue(1, $prod->getTitre());
    $req->bindvalue(2, $prod->getDescription());
    $req->bindvalue(3, $prod->getPhoto());
    $req->bindvalue(4, $prod->getCategorie());
    $req->bindvalue(5, $prod->getSoustype());
    $req->bindvalue(6, $prod->getPrix());

    $req->execute();

    //send to clients
    require_once '../views/testMail.php';

}

function afficherProduit()
{
    $db = config::getConnexion();
    $sql = "select * from produit";
    $res = $db->query($sql);
    return $res->fetchAll();
}

function nbProductsShop()
{
    $db = config::getConnexion();
    $sql = "select count(*) from produit where categorie='shop'";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

function afficherProduitMenu()
{
    $db = config::getConnexion();
    $sql = "select * from produit where categorie='menu'";
    $res = $db->query($sql);
    return $res->fetchAll();
}

function afficherProduitShop()
{
    $db = config::getConnexion();
    $sql = "select * from produit where categorie='shop'";
    $res = $db->query($sql);
    return $res->fetchAll();
}

function supprimerProduit(int $id)
{
    $prod = getProduitById($id);
    if ($prod->getPhoto() != "img/default.jpg") {
        unlink("../../FO/views/stockage/{$prod->getPhoto()}");
    }
    $db = config::getConnexion();
    $sql = "delete from produit where id=:id";
    $req = $db->prepare($sql);
    $req->bindvalue(':id', $id);

    $req->execute();
}

function modifierProduit(Produit $newProd)
{
    $db = config::getConnexion();
    $sql = "update produit set titre=:titre, description=:description, photo=:photo, categorie=:categorie,soustype=:soustype where id=:id";
    $req = $db->prepare($sql);
    $req->bindvalue(':id', $newProd->getId());
    $req->bindvalue(':titre', $newProd->getTitre());
    $req->bindvalue(':description', $newProd->getDescription());
    $req->bindvalue(':photo', $newProd->getPhoto());
    $req->bindvalue(':categorie', $newProd->getCategorie());
    $req->bindvalue(':soustype', $newProd->getSoustype());

    $req->execute();
}

function getProduitById(int $id)
{
    $db = config::getConnexion();
    $sql = "select * from produit where id=?";
    $req = $db->prepare($sql);
    $req->bindvalue(1, $id);

    $req->execute();
    $row = $req->fetch();
    return new Produit($row['id'], $row['titre'], $row['description'], $row['photo'], $row['categorie'], $row['soustype'], $row['date'], $row['prix']);

}

function getLastProduct()
{
    $db = config::getConnexion();
    $sql = "select * from produit order by date asc";
    $res = $db->query($sql);
    $row = $res->fetch();
    return new Produit($row['id'], $row['titre'], $row['description'], $row['photo'], $row['categorie'], $row['soustype'], $row['date'], $row['prix']);

}

?>
