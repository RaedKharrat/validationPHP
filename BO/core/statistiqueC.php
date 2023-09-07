<?PHP
require_once "../../config.php";

function numberClients()
{
    $db = config::getConnexion();
    $sql = "select count(*) from utilisateur";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

function numberClientsActif()
{
    $db = config::getConnexion();
    $sql = "select count(*) from utilisateur where active=1";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

function numberClientsDesactive()
{
    $db = config::getConnexion();
    $sql = "select count(*) from utilisateur where active=0";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

function numberArticles()
{
    $db = config::getConnexion();
    $sql = "select count(*) from article";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

function numberImage()
{
    $db = config::getConnexion();
    $sql = "select count(*) from gallery";
    $res = $db->query($sql);
    return $res->fetchColumn();
}


function maxNumberCnx()
{
    $db = config::getConnexion();
    $sql = "select * from utilisateur ";
    $res = $db->query($sql);
    return $res->fetchColumn();
}

?>