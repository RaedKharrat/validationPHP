<?PHP
require_once "../../config.php";
include "../views/testMail.php";

//***************************** A J O U T E R   R E C L A M A T I O N  ***************************
function ajouterReclamation($reclamation)
{
    //$sql="insert into reclamation (id_client,id_motif,message,date,etat) values (:id_client,:id_motif,:message,:date,:etat)";
    $sql = "INSERT INTO reclamation (id_client, id_motif, etat, message,date) VALUES (" . $reclamation->getclient() . "," . $reclamation->getmotif() . ",'" . $reclamation->getetat() . "','" . $reclamation->getsm() . "','" . $reclamation->getdate() . "')";
    echo $sql;
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);

        $client = $reclamation->getclient();
        $motif = $reclamation->getmotif();
        $sm = $reclamation->getsm();
        $date = $reclamation->getdate();
        $etat = $reclamation->getetat();
        $req->bindValue(':id_client', $client);
        $req->bindValue(':id_motif', $motif);
        $req->bindValue(':message', $sm);
        $req->bindValue(':date', $date);
        $req->bindValue(':etat', $etat);

        $req->execute();

    } catch (Exception $e) {
        echo 'Erreur: ' . $e->getMessage();
    }

}

//****************************** A F F I C H E R   R E C L A M A T I O N ***********************************
function afficherReclamations($hi, $tri)
{
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql = "SElECT id_reclamation, user.name as nomprenom, motif.motif, reclamation.etat, reclamation.message ,reclamation.date From reclamation, user , motif where reclamation.id_client=" . $hi . " and reclamation.id_client=user.id and reclamation.id_motif=motif.id_motif";
    switch ($tri) {
        case 1 :
            $sql .= " order by id_reclamation";
            break;
        case 2 :
            $sql .= " order by nomprenom";
            break;
        case 3 :
            $sql .= " order by motif.motif";
            break;
        case 4 :
            $sql .= " order by reclamation.message";
            break;
        case 5 :
            $sql .= " order by reclamation.date";
            break;
        case 6 :
            $sql .= " order by reclamation.etat";
            break;
    }

    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

//****************************** B A C K E N D   A F F I C H E R   R E C L A M A T I O N ***********************************
function backendAfficherReclamations($tri)
{
    $sql = "SElECT id_reclamation, user.name as nomprenom, motif.motif, reclamation.etat, reclamation.message ,reclamation.date From reclamation, user , motif where reclamation.id_client=user.id and reclamation.id_motif=motif.id_motif";/*  SElECT id_reclamation, user.name as nomprenom, motif.motif, archive.etat, archive.message ,archive.date From archive, user , motif where archive.id_client=user.id and archive.id_motif=motif.id_motif";*/
    switch ($tri) {
        case 1 :
            $sql .= " order by id_reclamation";
            break;
        case 2 :
            $sql .= " order by nomprenom";
            break;
        case 3 :
            $sql .= " order by motif.motif";
            break;
        case 4 :
            $sql .= " order by reclamation.message";
            break;
        case 5 :
            $sql .= " order by reclamation.date";
            break;
        case 6 :
            $sql .= " order by reclamation.etat";
            break;
    }

    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function backendAfficherReclamationsarch($tri)
{
    $sql = "SElECT id_reclamation, user.name as nomprenom, motif.motif, archive.etat, archive.message ,archive.date From archive, user , motif where archive.id_client=user.id and archive.id_motif=motif.id_motif";
    switch ($tri) {
        case 1 :
            $sql .= " order by id_reclamation";
            break;
        case 2 :
            $sql .= " order by nomprenom";
            break;
        case 3 :
            $sql .= " order by motif.motif";
            break;
        case 4 :
            $sql .= " order by archive.message";
            break;
        case 5 :
            $sql .= " order by archive.date";
            break;
        case 6 :
            $sql .= " order by archive.etat";
            break;
    }

    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

//******************************** S U P P R I M E R   R E C L A M A T I O N ********************************
function supprimerReclamation($id)
{
    $db = config::getConnexion();
    $sql0 = "insert into archive select * from reclamation where id_reclamation= :id";
    $req0 = $db->prepare($sql0);
    $req0->bindValue(':id', $id);
    $req0->execute();

    $sql = "DELETE FROM reclamation where id_reclamation= :id";
    echo $sql;
    $req = $db->prepare($sql);
    $req->bindValue(':id', $id);
    try {
        $req->execute();
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}


//******************************* M O D I F I E R   R E C L A M A T I O N **********************************
function modifierReclamation($id_reclamation, $rec)
{
    $sql = "UPDATE reclamation SET id_motif=:id_motif, message=:message,date=:date WHERE id_reclamation=:id_reclamation";

    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try {
        $req = $db->prepare($sql);
        $id_motif = $rec->getmotif();
        $message = $rec->getsm();
        $date = $rec->getdate();
        //	$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
        $req->bindValue(':id_motif', $id_motif);
        $req->bindValue(':message', $message);
        $req->bindValue(':date', $date);
        $req->bindValue(':id_reclamation', $id_reclamation);


        $s = $req->execute();

        header('Location: reclamation.php');
    } catch (Exception $e) {
        echo " Erreur ! " . $e->getMessage();

    }

}//******************************* B A C K E N D   M O D I F I E R   R E C L A M A T I O N **********************************
function backendModifierReclamation($id_reclamation, $rec)
{
    $sql = "UPDATE reclamation SET id_motif=:id_motif, message=:message,etat=:etat WHERE id_reclamation=:id_reclamation";
    $sql1 = "SELECT email from user,reclamation where reclamation.id_client=user.id and id_reclamation=$id_reclamation";
    $db = config::getConnexion();

    $id_motif = $rec->getmotif();
    $message = $rec->getsm();
    $etat = $rec->getetat();


    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try {


        $req = $db->prepare($sql);

        $req->bindValue(':id_motif', $id_motif);
        $req->bindValue(':message', $message);
        $req->bindValue(':etat', $etat);
        $req->bindValue(':id_reclamation', $id_reclamation);

        $liste = $db->query($sql1);
        foreach ($liste as $T) ;

        $s = $req->execute();
        //	require_once '../views/backoffice/testMail.php?mail=aziz99arfaoui@gmail.com';//.$T["email"];
        if ($etat == "Transfere") {
            $subject = "Demande transférée";
            $msg = "Nous avons l'honneur de vous informer que votre réclamation a été prise en charge par le service concerné";
        } else
            if ($etat == "Satisfait") {
                $subject = "Demande Satisfaite";
                $msg = "Nous avons l'honneur de vous informer que votre réclamation a été acceptée";
            } else
                if ($etat == "Non Satisfait") {
                    $subject = "Demande Non Satisfaite";
                    $msg = "Nous somme désolés de vous informer que votre réclamation a été refusée";
                }


        envoyer_mail($T["email"], $subject, $msg);

        //       header('Location: backend_reclamation.php');
    } catch (Exception $e) {
        echo " Erreur ! " . $e->getMessage();

    }

}

function calculerReclamation($probleme)
{
    $sql = "SELECT * FROM reclamation where probleme='$probleme'";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        $nombre = $liste->rowCount();
        return $nombre;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

//*************************** R E C U P E R E R   R E C L A M A T I O N  ****************************

function recupererReclamation($id)
{
    $sql = "SELECT reclamation.* , motif.motif from reclamation, motif where motif.id_motif=reclamation.id_motif and id_reclamation=$id";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function Recuperer_Prix_Plus()
{
    $sql = "SElECT Count(*) as numrec From reclamation  ORDER BY id_reclamation";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function Pourcentage_Prix($lib)
{
    $sql = "select date from reclamation";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

function nbr_recu()
{
    $sql = 'SELECT count(*) as nbr FROM reclamation WHERE etat="Recu"';
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        foreach ($liste as $T) ;
        return ($T["nbr"]);
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

?>