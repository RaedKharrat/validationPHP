<?php

require_once '../core/ProduitC.php';
require_once '../entities/Produit.php';

//controle
if(isset($_POST['titre'])){
  //ajout produit

  $photoLink="img/default.jpg";
  $upload=false;
  //contrôle saisie
  if($_FILES['photo']['size']!=0){
    //img
    $now=date('dmY_Gis');
    $ext=pathinfo($_FILES['photo']['name'])['extension'];
    $_FILES['photo']['name']="{$now}.{$ext}";
    $photoLink="img/{$_FILES['photo']['name']}";
    $check = getimagesize($_FILES['photo']["tmp_name"]);
    $upload=true;
  }

  $titre=$_POST['titre'];
  $description=$_POST['description'];
  $photo=$photoLink;
  $categorie=$_POST['categorie'];
  $soustype=$_POST['soustype'];
  $prix=$_POST['price'];

  $produit=new Produit(null,$titre,$description,$photo,$categorie,$soustype,date('d/m/Y'),$prix);

  if($upload==true){
    if( $check['mime'] != 'image/jpeg' || $check['mime'] != 'image/png'){
      $target_dir = "../../FO/views/stockage/";
      move_uploaded_file($_FILES['photo']["tmp_name"], $target_dir.$photo);
    }
  }
  ajouterProduit​($produit);
  //redirection
  header('Location: menuAdmin.php');
}

include_once 'includes/header.inc.php';

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Produit
      <small>Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="menuAdmin.php">Menu</a></li>
      <li><a href="#" class="active">Add</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Add Product</h3>
            <style media="screen">
            @media (max-width: 751px){
              #searshForm{
                margin-bottom:20px;
                margin-left:0;
              }
            }
            </style>
          </div>
          <div class="box-body">
            <form action="#" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="titre">Titre</label>
                <input id="titre" type="text" class="form-control" name="titre" value="" placeholder="titre" required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5" cols="80" placeholder="Description" required></textarea>
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <input id="photo" type="file" accept="image/jpeg,image/x-png" class="form-control" name="photo" value="">
              </div>
              <input type="hidden" name="categorie" value="menu">
              <div class="form-group">
                <label for="soustype">Sous Type</label>
                <select class="form-control" name="soustype" id="soustype" required>
                  <option value="coffee">Coffee</option>
                  <option value="dessert">Dessert</option>
                  <option value="drink">Drink</option>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Prix</label>
                <input id="price" type="number" min="0" max="999" step="any" class="form-control" name="price" value="1" required>
              </div>
              <input type="submit" class="btn btn-primary" value="Add">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
include_once 'includes/footer.inc.php';
?>
