<?php

// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
require_once '../../config.php';
// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
// On teste pour voir si nos variables ont bien été enregistrées
    echo '<br />';
} else {
// puis on le redirige vers la page d'accueil
    /*echo '<meta http-equiv="refresh" content="0;URL=login.php">';
    exit();*/
}

include_once 'includes/header.inc.php';
include_once 'includes/navbar.inc.php';

?>

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(assets/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">The Best Coffee Testing Experience</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(assets/images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-8 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome</span>
                        <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
                        <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="shop.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a
                                    href="menu.php" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View
                                Menu</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <button class="btn"><a href="ajout_reclamation.php"> Add New Reclamation</a></button>
                <button class="btn2"><a href="mailto:aziz99arfaoui@gmail.com"> You can always Send a mail </a></button>

            </div>


            <?PHP
            require_once "../core/reclamationC.php";
            $_SESSION["login"]=55;
            if (isset($_GET['tri'])) {
                $listeReclamations = afficherReclamations($_SESSION['login'], $_GET['tri']);
            } else {
                $listeReclamations = afficherReclamations($_SESSION['login'], 1);
            }

            ?>
            <div class="w3-container">
                <table width="100%">
                    <tr>
                        <td>
                            <table class="w3-table-all w3-card-4" border="1" width="80%" align="center">

                                <th><a href="reclamation.php?tri=3">Motif</a></th>
                                <th><a href="reclamation.php?tri=4">message</a></th>
                                <th><a href="reclamation.php?tri=5">Date</a></th>
                                <th><a href="reclamation.php?tri=6">Etat</a></th>
                                <th>Modif.</th>
                                <th>Suppr.</th>

                                <?php foreach ($listeReclamations as $T) : ?>
                                    <tr>

                                        <td><?php echo($T["motif"]); ?></td>
                                        <td><?php echo($T["message"]); ?></td>
                                        <td><?php echo($T["date"]); ?></td>
                                        <td><?php echo($T["etat"]); ?></td>
                                        <td align="center"><a
                                                    href="modifierReclamation.php?id_reclamation=<?php echo($T["id_reclamation"]); ?>"><img
                                                        src="assets/images/btn_modif.png" height="35" width="35"></a></td>
                                        <td align="center"><a
                                                    href="../core/supprimerReclamation.php?id_reclamation=<?php echo($T["id_reclamation"]); ?>"><img
                                                        src="assets/images/btn_supp.png" height="35" width="35"></a></td>
                                    </tr>
                                <?php endforeach; ?>

                            </table>
                        </td>
                        <td align="center">
                            <?php
                            if (isset($_GET['tri'])) {
                                echo('<p  align="center"><a href="pdff.php?tri=' . $_GET["tri"] . ',user=' . $_SESSION["login"] . '"><img name="btn_pdf" src="assets/images/btn_pdf.png" height="100" width="100"></a></p>');
                            } else {
                                echo('<p  align="center"><a href="pdff.php?tri=1,user=' . $_SESSION["login"] . '"><img name="btn_pdf" src="assets/images/btn_pdf.png" height="100" width="100"></a></p>');
                            }
                            ?>
                        </td>
                    </tr>
                </table>

            </div>


        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate"></div>
        l
    </section>

<?php
include_once 'includes/footer.inc.php';
?>
