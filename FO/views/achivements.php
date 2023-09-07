<?php

require_once '../../config.php';
require_once "../entities/achivement.php";
require_once "../core/achivementC.php";

include_once 'includes/header.inc.php';
include_once 'includes/navbar.inc.php';

$liste = recupererAchivemetClient($_SESSION['id']);

foreach ($liste as $row) {
    $type = $row['type'];
    $ptfid = $row['ptfid'];
}

?>

    <form class="billing-form ftco-bg-dark p-3 p-md-5" style="background-color: #4b9d4d99 ; margin: 160px;">
        <h4 class="mb-4 billing-heading" style="color: black;">My achivements :</h4>

        <div style="  margin-left: 218px; margin-right: 423px; background-color: #bde7bf99;">
            <h2 class="mb-4 billing-heading">Your level is <?php echo($type); ?> </h2>
            <h2 class="mb-4 billing-heading">You have <?php echo($ptfid); ?> points </h2>
            <h2 class="mb-4 billing-heading" style="font-size: 15px "> Ps: 10 Points = 5DT </h2>
        </div>
        <div style="  margin-left: 200px; margin-right: 400px; background-color: #bde7bf99;">
            <h1 class="mb-4 billing-heading" style="font-size: 20px ">To ungrade Your level you have to : </h1>
            <h1 class="mb-4 billing-heading" style="font-size: 18px ">1- Buy products from <a
                        href="../../../FO/views/shop.php" style="color: black;"> Our Shop</a></h1>
            <h1 class="mb-4 billing-heading" style="font-size: 20px ">2- Share our fb page : </h1>


        </div>
        <?php
        function shareFunction()
        {
            facebookShare($_SESSION['id']);
        }

        if (isset($_GET['ok'])) {
            shareFunction();
        }
        ?>
        <div class="fb-share-button" data-href="https://www.facebook.com/ObladiCoffee/" data-layout="button"
             data-size="small"><a target="_blank"
                                  href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FObladiCoffee%2F&amp;src=sdkpreparse"
                                  class="fb-xfbml-parse-ignore">Partager</a></div>


    </form><!-- END -->

<?php
include_once 'includes/footer.inc.php';
?>