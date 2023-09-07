<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="./"><img src="assets/images/logoobladi.png" style="width: 55px;"></small></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item <?php echo isset($homeActive) ? $homeActive : ''; ?>"><a href="./" class="nav-link">Home</a>
                </li>-->
                <li class="nav-item <?php echo isset($menuActive) ? $menuActive : ''; ?> "><a href="menu.php"
                                                                                              class="nav-link">Menu</a>
                </li>
                <li class="nav-item <?php echo isset($shopActive) ? $shopActive : ''; ?>"><a href="shop.php"
                                                                                             class="nav-link">Shop</a>
                </li>
                <li class="nav-item <?php echo isset($galleryActive) ? $galleryActive : ''; ?>"><a href="gallery.php"
                                                                                                   class="nav-link">Gallery</a>
                </li>
                <li class="nav-item <?php echo isset($blogActive) ? $blogActive : ''; ?>"><a href="blog.php"
                                                                                             class="nav-link">Blog</a>
                </li>
                <?php
                if (!isset($_SESSION['id'])) { ?>
                    <li class="nav-item <?php echo isset($teamActive) ? $teamActive : ''; ?>"><a href="team.php"
                                                                                                 class="nav-link">Our
                            Team</a>
                    </li>
                    <li class="nav-item"><a href="login.php" class="nav-link btn btn-primary">Sign
                            in/Sign up</a></li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item <?php echo isset($serviceActive) | isset($livreurActive) ? 'active' : ''; ?> dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="livreur.php">Livreur</a>
                            <a class="dropdown-item" href="services.php">Services</a>
                            <a class="dropdown-item" href="reclamation.php" class="nav-link">SAV</a>
                        </div>
                    </li>
                    <li class="nav-item <?php echo isset($cmdActive) ? $cmdActive : ''; ?> dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Commande</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="ajoutc.php">Ajouter Commande</a>
                            <a class="dropdown-item" href="modifc.php">Modifier Commande</a>
                            <a class="dropdown-item" href="affichec2.php">Affiche Commande</a>
                            <a class="dropdown-item" href="rechc2.php">Recherche Commande</a>
                            <a class="dropdown-item" href="Statistique.php">Statistique</a>
                        </div>
                    </li>
                    <li class="nav-item <?php echo isset($factureActive) ? $factureActive : ''; ?> dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Facture</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="ajoutf.php">Ajouter Facture</a>
                            <a class="dropdown-item" href="modiff.php">Modifier Facture</a>
                            <a class="dropdown-item" href="affichf2.php">Affiche Facture</a>
                            <a class="dropdown-item" href="rechf2.php">Recherche Facture</a>
                        </div>
                    </li>
                    <li class="nav-item <?php echo isset($teamActive) ? $teamActive : ''; ?>"><a href="team.php"
                                                                                                 class="nav-link">Our
                            Team</a>
                    </li>
                    <li class="nav-item dropdown" class="nav-item"><a href="myaccount.php"
                                                                      class="nav-link btn btn-primary"> <?php echo $_SESSION['nom']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" name="logout" href="logout.php">logout</a>
                        </div>
                    </li>
                    <?php
                }
                ?>
                <li class="nav-item cart"><a href="cart.php" class="nav-link"><span
                                class="icon icon-shopping_cart"></span><span
                                class="bag d-flex justify-content-center align-items-center"><small><?php echo count($_SESSION['cart']); ?></small></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
