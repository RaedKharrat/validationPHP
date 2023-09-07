<?php

require_once '../core/ProduitC.php';
require_once '../entities/Produit.php';

$prodUpdate=getProduitById($_GET['idUpdate']);

//controle
if(isset($_POST['titre'])){

  $upload=false;
  //contrôle saisie
  if($_FILES['photo']['size']!=0){
    //img
    $now=date('dmY_Gis');
    $ext=pathinfo($_FILES['photo']['name'])['extension'];
    $_FILES['photo']['name']="{$now}.{$ext}";
    $photoLink="img/{$_FILES['photo']['name']}";
    $check = getimagesize($_FILES['photo']["tmp_name"]);
    print_r(error_get_last());
    $upload=true;
  }

  $titre=$_POST['titre'];
  $description=$_POST['description'];
  $soustype=$_POST['soustype'];
  $prix=$_POST['price'];

  //new values
  $prodUpdate->setTitre($titre);
  $prodUpdate->setDescription($description);
  $prodUpdate->setSousType($soustype);
  $prodUpdate->setPrix($prix);

  if($upload===true){
    if( $check['mime'] == 'image/jpeg' || $check['mime'] == 'image/png'){

      //supp old photo
      if($prodUpdate->getPhoto()!="img/default.jpg"){
        unlink("../../FO/views/stockage/{$prodUpdate->getPhoto()}");
      }

      $prodUpdate->setPhoto($photoLink);
      $target_dir = "../../FO/views/stockage/";
      move_uploaded_file($_FILES['photo']["tmp_name"], $target_dir.$photoLink);
    }
  }
  modifierProduit($prodUpdate);
  //redirection
  header('Location: shopAdmin.php');
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
      <li><a href="#" class="active">Update</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Update Product</h3>
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
                <input id="titre" type="text" class="form-control" name="titre" value="<?php echo $prodUpdate->getTitre(); ?>" placeholder="titre" required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="5" cols="80" placeholder="Description" required><?php echo $prodUpdate->getDescription(); ?></textarea>
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <style media="screen">
                  img.img-thumbnail{
                    height: 200px;
                  }
                </style>
                <img class="img-thumbnail rounded" src="../../FO/views/stockage/<?php echo $prodUpdate->getPhoto() ?>" alt="Product photo">
                <input id="photo" type="file" accept="image/jpeg,image/x-png" class="form-control" name="photo" value="">
              </div>
              <div class="form-group">
                <label for="soustype">Sous Type</label>
                <select class="form-control" name="soustype" id="soustype" required>
                  <?php if($prodUpdate->getSousType()=='coffee'): ?>
                    <option value="coffee" selected>Coffee</option>
                  <?php else: ?>
                    <option value="coffee">Coffee</option>
                  <?php endif; ?>
                  <?php if($prodUpdate->getSousType()=='dessert'): ?>
                    <option value="dessert" selected>Dessert</option>
                  <?php else: ?>
                    <option value="dessert">Dessert</option>
                  <?php endif; ?>
                  <?php if($prodUpdate->getSousType()=='drink'): ?>
                    <option value="drink" selected>Drink</option>>
                  <?php else: ?>
                    <option value="drink">Drink</option>
                  <?php endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Prix</label>
                <input id="price" type="number" min="0" max="999" step="any" class="form-control" name="price" value="<?php echo $prodUpdate->getPrix(); ?>" required>
              </div>
              <input type="submit" class="btn btn-primary" value="Update">
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
