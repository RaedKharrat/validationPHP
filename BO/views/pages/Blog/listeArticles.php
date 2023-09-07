<?PHP

require_once "../../../../config.php";
require_once "../../../core/articleC.php";
$listeArticles = afficherArticlesAdmin();

//var_dump($listeEmployes->fetchAll());


include_once '../../includes/header.inc.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Liste Of Articles</h3>
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
                        <table id="myTable" id="example2" class="table table-bordered table-hover">

                            <tr>
                                <td>Titre</td>
                                <td>Date</td>
                                <td>Archive</td>
                                <td>Action</td>
                            </tr>


                            <?PHP
                            foreach ($listeArticles as $row) {
                                ?>
                                <tr>
                                    <td><?PHP echo $row['titre']; ?></td>
                                    <td><?PHP echo $row['date']; ?></td>
                                    <td><?PHP echo $row['archive']; ?></td>
                                    <td>
                                        <form method="POST" action="archiverArticle.php">
                                            <input type="submit" name="archive" value="archiver">
                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                        </form>
                                    </td>
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
