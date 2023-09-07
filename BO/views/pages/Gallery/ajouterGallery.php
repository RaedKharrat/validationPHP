<?PHP

require_once "../../../../config.php";
require_once "../../../entities/gallery.php";
require_once "../../../core/galleryC.php";

error_reporting(0);


if (isset($_POST['ss'])) {


    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    move_uploaded_file($tempname, $folder);
//Partie3

    ajouterGallery($filename, $_POST['nom']);
    ajouterGalleryimg($filename, $_POST['nom']);

    header('Location: ajouterGallery.html');
}

//*/
include_once '../../includes/header.inc.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Gallery

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Gallery</a></li>
            <li class="active">Add</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add to Gallery</h3>

            </div>
            <div class="box-body">

                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputPassword1">nom</label>
                        <input type="text" name="nom" class="form-control" id="exampleInputPassword1"
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
