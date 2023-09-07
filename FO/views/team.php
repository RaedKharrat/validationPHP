<?PHP

require_once '../../config.php';
require_once "../core/teamC.php";
$listeTeam = afficherTeam();

include_once 'includes/header.inc.php';
$teamActive = "active";
include_once 'includes/navbar.inc.php';
$titreBS = $soustitreBS = "Our Team";
include_once 'includes/beforeServiceOther.inc.php';

//var_dump($listeEmployes->fetchAll());
?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">


                <?PHP
                foreach ($listeTeam as $row) {
                    ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a class="block-20"
                               style="background-image: url(<?PHP echo '../../BO/views/pages/Team/uploads/' . $row['image']; ?>); width: 300px"></a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a><?PHP echo $row['nom']; ?></a></div>
                                    <div><a><?PHP echo $row['role']; ?></a></div>

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