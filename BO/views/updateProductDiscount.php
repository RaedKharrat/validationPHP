<?php

require_once '../core/ProduitC.php';
require_once '../core/ProduitDiscountC.php';
require_once '../entities/Produit.php';
require_once '../entities/ProduitDiscount.php';

$prodUpdate=getProduitDiscountById($_GET['idUpdate']);

if(isset($_POST['discount'])){
  $prodUpdate->setDiscount($_POST['discount']);
  modifierProduitDiscount($prodUpdate);
  //redirection
  header('Location: discount.php');
}

include_once 'includes/header.inc.php';

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Produit
      <small>Discount</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="./menuAdmin.php">Discount</a></li>
      <li><a href="#" class="active">Update</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Update Product discount</h3>
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
            <form action="" method="post">
              <div class="form-group">
                <label for="price">Discount (%) </label>
                <input id="price" type="number" min="0" max="90" class="form-control" name="discount" value="<?php echo $prodUpdate->getDiscount(); ?>" required>
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
