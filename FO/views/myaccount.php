<?php

require_once '../../config.php';
include_once 'includes/header.inc.php';
include_once 'includes/navbar.inc.php';
$titreBS = $soustitreBS = "My Account";
include_once 'includes/beforeServiceOther.inc.php';
?>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <ul class="navbar-nav ml-auto" style="display: flex;width: 202px;margin-right: 667px;">
                    <li class="nav-item" style="margin-bottom: 18px;"><a href="info.php"
                                                                         class="nav-link btn btn-primary">
                            My
                            Informations </a></li>
                    <li class="nav-item"><a href="achivements.php" class="nav-link btn btn-primary"> My achivements </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-left: 720px;margin-top: 11px;"><a href=""> Logout </a></li>
                </ul>
            </div>
        </div>
    </section>

<?php
include_once 'includes/footer.inc.php';
?>