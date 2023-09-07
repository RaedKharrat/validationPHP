<?PHP
require_once "../../../entities/utilisateur.php";
require_once "../../../../config.php";
require_once "../../../core/utilisateurC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['dateNaissance']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['numTel']) and isset($_POST['region']) and isset($_POST['role'])) {

    $u = new utilisateur($_POST['nom'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['email'], $_POST['mdp'], $_POST['numTel'], $_POST['region'], 5, true, $_POST['role'], 0);

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
    header('Location: listeClients.php');
}

include_once '../../includes/header.inc.php';

?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Clients
                <small>ajout client</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Clients</a></li>
                <li class="active">Ajouter client</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Ajouter Client</h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="breadcome-heading">

                            </div>

                            <form method="POST" action="" id="myForm">
                                <div class="form-group">
                                    <label for="nom">nom</label>
                                    <input type="text" id="nom" name="nom" class="form-control" placeholder="nom"
                                           required>
                                    <span class="tooltip">le nom doit depasser 4 lettres</span>

                                    <label for="exampleInputPassword1">prenom</label>
                                    <input type="text" id="prenom" name="prenom" class="form-control" required>
                                    <span class="tooltip">le nom doit depasser 4 lettres</span>

                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="dateNaissance">date de naissance</label>
                                    <input type="date" id="dateNaissance" name="dateNaissance" class="form-control"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="mdp">mot de passe</label>
                                    <input type="password" name="mdp" id="mdp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="numTel">Num tel</label>
                                    <input type="number" id="numTel" name="numTel" class="form-control" required>
                                    <span class="tooltip">le numero doit comporter 8 </span>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6" style="padding-left: 0">
                                        <label for="region">region</label>
                                        <input type="text" name="region" id="region" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6" style="padding-left: 0; padding-right: 0">
                                        <label for="prof">prof</label>
                                        <input type="text" name="prof" id="prof" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="admin">admin</option>
                                        <option value="admin">clients</option>
                                    </select></div>
                                <button type="submit" class="btn btn-block btn-primary btn-lg">Ajouter</button>
                            </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <!-- /.row -->
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script src="java.js"></script>
<?php
include_once '../../includes/footer.inc.php';
?>