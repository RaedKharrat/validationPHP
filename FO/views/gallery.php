<?PHP

require_once "../../config.php";
require_once "../core/galleryC.php";

$listeGallery = afficherGallery();


include_once 'includes/header.inc.php';
$galleryActive = "active";
include_once 'includes/navbar.inc.php';
$titreBS = $soustitreBS = "Gallery";
include_once 'includes/beforeServiceOther.inc.php';

//var_dump($listeEmployes->fetchAll());
?>


    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">


                <?PHP
                foreach ($listeGallery as $row) {
                    ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a class="block-20"
                               style="background-image: url(<?PHP echo '/Obladi/BO/views/pages/Gallery/uploads/' . $row['image']; ?>); width: 300px"></a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a><?PHP echo $row['nom']; ?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?PHP
                }
                ?>
            </div>
    </section>


<?php
include_once 'includes/footer.inc.php';
?>