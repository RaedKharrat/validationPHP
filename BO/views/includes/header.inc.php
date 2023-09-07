<?php

if (isset($_POST['signout'])) {
    unset($_SESSION['signOn']);
    header('location: sign-in.php');
}

$basePath = "/Obladi/BO/views/pages/";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obladi | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>dist/css/skins/_all-skins.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo $basePath . '../' ?>bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="<?php echo $basePath . '../' ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
          href="<?php echo $basePath . '../' ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet"
          href="<?php echo $basePath . '../' ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo $basePath . '../' ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Ob</b>C</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Obladi</b> Coffee</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu pull-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo $basePath . '../' ?>dist/img/user2-160x160.jpg" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs"><?php echo isset($_SESSION['nom']) ? $_SESSION['nom'] : 'Obladi Admin' ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-footer">
                                <div class="pull-right">
                                    <form method="post">
                                        <input type="hidden" name="signout" value="true">
                                        <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo $basePath . '../' ?>dist/img/Obladi.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Obladi Team's</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Obladi Back-End</li>

                <!--Kammeri-->

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-coffee"></i> <span>Products</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <small class="label pull-right bg-green"></small>
              </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath . '../' ?>shopAdmin.php"><i class="fa fa-shopping-cart"></i>
                                Shop </a></li>
                        <li><a href="<?php echo $basePath . '../' ?>menuAdmin.php"><i class="fa fa-list-alt"></i> Menu
                            </a></li>
                        <li><a href="<?php echo $basePath . '../' ?>discount.php"><i class="fa fa-money"></i> Discount
                            </a></li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo $basePath . '../' ?>reservationAdmin.php">
                        <i class="fa fa-calendar-check-o"></i> <span>Reservation</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"></small>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $basePath . '../' ?>tableAdmin.php">
                        <i class="fa fa-glass"></i> <span>Table</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"></small>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $basePath . '../' ?>commentsAdmin.php">
                        <i class="fa fa-comments"></i> <span>Comments</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"></small>
                        </span>
                    </a>
                </li>

                <!--Bedis-->

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>Commande</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath . '../' ?>ajoutc1.php"><i class="fa fa-circle-o"></i> Ajout
                                commande</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>modifc1.php"><i class="fa fa-circle-o"></i> Modifier
                                commande</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>suppc1.php"><i class="fa fa-circle-o"></i> Supprimer
                                commande</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>affichec1.php"><i class="fa fa-circle-o"></i>
                                Affiche commande</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>rechc1.php"><i class="fa fa-circle-o"></i> Chercher
                                commande</a></li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i> <span>Facture</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath . '../' ?>ajoutf1.php"><i class="fa fa-circle-o"></i> Ajout
                                facture</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>modiff1.php"><i class="fa fa-circle-o"></i> Modifier
                                facture</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>suppf1.php"><i class="fa fa-circle-o"></i> Supprimer
                                facture</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>affichf1.php"><i class="fa fa-circle-o"></i> Affiche
                                facture</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>tri1.php"><i class="fa fa-circle-o"></i> tri facture</a>
                        </li>
                        <li><a href="<?php echo $basePath . '../' ?>rechf1.php"><i class="fa fa-circle-o"></i> Chercher
                                facture</a></li>
                        <li><a href="<?php echo $basePath . '../' ?>pdf.php"><i class="fa fa-circle-o"></i> Liste
                                facture en PDF</a></li>
                    </ul>
                </li>

                <!--Nermine-->

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Gestion de la livraison</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath . '../' ?>b.php"><i class="fa fa-circle-o"></i> Livreur </a>
                        </li>
                        <li><a href="<?php echo $basePath . '../' ?>a.php"><i class="fa fa-circle-o"></i> Livraison </a>
                        </li>
                        <li><a href="<?php echo $basePath . '../' ?>ajoutlivreur.php"><i class="fa fa-circle-o"></i>
                                ajouterLivreur </a></li>
                        <li><a href="<?php echo $basePath . '../' ?>ajoutlivraison.php"><i class="fa fa-circle-o"></i>
                                ajouter Livraison </a></li>
                        <li><a href="<?php echo $basePath . '../' ?>stat.php"><i class="fa fa-circle-o"></i>
                                statistiques </a></li>
                    </ul>
                </li>

                <!--Hidaya-->

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Clients</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath; ?>tables/listeClients.php"><i class="fa fa-circle-o"></i>
                                Liste des Clients</a></li>
                        <li><a href="<?php echo $basePath; ?>tables/ajouterClient.php"><i class="fa fa-circle-o"></i>
                                Ajouter Client </a></li>
                        <li><a href="<?php echo $basePath; ?>tables/rechercherClient.php"><i class="fa fa-circle-o"></i>
                                Recherche Client </a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i> <span>Blog</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $basePath; ?>Blog/listeArticles.php"><i class="fa fa-circle-o"></i>
                                Liste des Articles</a></li>
                        <li><a href="<?php echo $basePath; ?>Blog/ajouterArticle.php"><i class="fa fa-circle-o"></i>
                                Ajouter un article </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $basePath; ?>Gallery/ajouterGallery.php">
                        <i class="fa fa-picture-o"></i> <span>Ajout à la galerie</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"></small>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $basePath; ?>Team/ajouterTeam.php">
                        <i class="fa fa-user"></i> <span>Ajouter un serveur</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-green"></small>
                        </span>
                    </a>
                </li>

            </ul>


        </section>
        <!-- /.sidebar -->
    </aside>
