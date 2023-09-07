<?PHP

require_once "../../../../config.php";
require_once "../../../entities/team.php";
require_once "../../../core/teamC.php";

error_reporting(0);
//echo('1');

if (isset($_POST['ss'])) {
    //echo('2');


    $filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    move_uploaded_file($tempname, $folder);
//Partie3
    //echo('3');
    //echo('4');
    ajouterTeam($_POST['nom'], $_POST['role'], $filename);
    //echo('5');
    ajouterTeamimg($filename, $_POST['nom']);
    //echo('6');

    header('Location: ajouterTeam.html');
}
//echo('7');
//*/

include_once '../../includes/header.inc.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add team
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Team</a></li>
            <li class="active">add member</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add to Team</h3>

            </div>
            <div class="box-body">

                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputPassword1">nom</label>
                        <input type="text" name="nom" class="form-control" id="exampleInputPassword1"
                               placeholder="titre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">role</label>
                        <input type="text" name="role" class="form-control" id="exampleInputPassword1"
                               placeholder="titre">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Picture</label>
                        <input type="file" name="image" id="exampleInputFile">
                    </div>
                    <button type="submit" name="ss" class="btn btn-block btn-primary btn-lg">Add</button>
                </form>


            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once '../../includes/footer.inc.php';
?>
