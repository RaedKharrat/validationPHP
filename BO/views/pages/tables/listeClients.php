<?PHP

require_once "../../../../config.php";
require_once "../../../core/utilisateurC.php";
$listeUtilisateurs = afficherUtilisateurs();


include_once '../../includes/header.inc.php';

//var_dump($listeEmployes->fetchAll());
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clients
            <small>Liste clients</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Clients</a></li>
            <li class="active">Liste des clients</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Liste Of Clients</h3>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="breadcome-heading">
                            <form role="search" style="width: 200px;">
                                <input id="myInput" type="text" placeholder="Search..." onkeyup="myFunction()"
                                       class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </div>

                        <table id="myTable" id="example2" name="myTable" class="table table-bordered table-hover">

                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Email</td>
                                <td>Date de naissance</td>
                                <td>Num Tel</td>
                                <td>region</td>
                                <td>prof</td>
                                <td>nombre Cnx</td>
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
                                    <td><?PHP echo $row['nbrCnx']; ?></td>
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
        <!-- /.row -->
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../../includes/footer.inc.php';
?>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            prod = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else if (prod) {
                    txtValue = prod.textContent || prod.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    }
</script>