<?PHP
require_once "../../../../config.php";
include "../../../core/utilisateurC.php";
$listeUtilisateurs = rechercher($_POST['nom']);

include_once '../../includes/header.inc.php';

//var_dump($listeEmployes->fetchAll());
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Clients
                <small>rechercher client</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Clients</a></li>
                <li class="active">Rechercher client</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Liste Of Clients</h3>
                            <form method="POST" action="rechercherClient.php">
                                <input type="text" name="nom" placeholder="tapez le com que vous rechercher">
                                <input type="submit" name="submit" value="chercher">
                            </form>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">

                                <tr>
                                    <td>Nom</td>
                                    <td>Prenom</td>
                                    <td>Email</td>
                                    <td>Date de naissance</td>
                                    <td>Num Tel</td>
                                    <td>region</td>
                                    <td>prof</td>
                                    <td>points</td>
                                    <td>active</td>
                                </tr>


                                <?PHP
                                foreach ($listeUtilisateurs as $row) {
                                    ?>
                                    <tr>
                                        <td><?PHP echo $row['nom']; ?></td>
                                        <td><?PHP echo $row['prenom']; ?></td>
                                        <td><?PHP echo $row['email']; ?></td>

                                        <td><?PHP echo $row['dateNaissance']; ?></td>
                                        <td><?PHP echo $row['numTel']; ?></td>
                                        <td><?PHP echo $row['region']; ?></td>
                                        <td><?PHP echo $row['prof']; ?></td>
                                        <td><?PHP echo $row['pointsFidelites']; ?></td>
                                        <td><?PHP echo $row['active']; ?></td>

                                    </tr>
                                    <?PHP
                                }
                                ?>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->


<?php
include_once '../../includes/footer.inc.php';
?>