<?PHP
require_once "../../../../config.php";
require_once "../../../entities/article.php";
require_once "../../../core/articleC.php";
error_reporting(0);


if (isset($_POST['ss'])) {

    $a = new article($_FILES['image'], $_POST['titre'], date('y-m-d'), $_POST['contenue'], 0);

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    move_uploaded_file($tempname, $folder);
//Partie3
    $username = "mcharekhidaya@gmail.com";
    $hash = "e8c3a1c5b05c72e25ca32990417db8ed5d3c3f22255b978a67dc3f9fd91e71f0";

    // Config variables. Consult http://api.txtlocal.com/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
    $sender = "hidaya"; // This is who the message appears to be from.
    $numbers = "+21623668213"; // A single number or a comma-seperated list of numbers
    $message = "This is a test message from the PHP API script.";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
    $message = urlencode($message);
    $data = "username=" . $username . "&hash=" . $hash . "&message=" . $message . "&sender=" . $sender . "&numbers=" . $numbers . "&test=" . $test;
    $ch = curl_init('http://api.txtlocal.com/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);

    $apiKey = urlencode('3ccYkSBn5JA-Wml8DQbNBKsL56HCYlyVZXMzVQFta6	');

    // Message details
    $numbers = array(21623668213);
    $sender = urlencode('Jims Autos');
    $message = rawurlencode('This is your message');

    $numbers = implode(',', $numbers);

    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

    // Send the POST request with cURL
    $ch = curl_init('https://api.txtlocal.com/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    ajouterArticle($a);


    ajouterArticleimg($_POST['titre'], $filename);


    // Authorisation details.


    header('Location: listeArticles.php');

}

include_once '../../includes/header.inc.php';

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                add Article

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">blog</a></li>
                <li class="active">add article</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add article</h3>

                </div>
                <div class="box-body">

                    <form method="POST" action="ajouterArticle.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Title</label>
                            <input type="text" name="titre" class="form-control" id="exampleInputPassword1"
                                   placeholder="titre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">contenue</label>
                            <textarea type="text" name="contenue" class="form-control"
                                      id="exampleInputPassword1"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Picture</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <button type="submit" name="ss" class="btn btn-block btn-primary btn-lg">Add</button>
                    </form>


                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

    </div>

<?php
include_once '../../includes/footer.inc.php';
?>