<?php

require_once '../core/ProduitC.php';
require_once '../core/ProduitDiscountC.php';
require_once '../entities/Produit.php';
require_once '../entities/ProduitDiscount.php';

//controle saisie
if(isset($_POST['produit'])){
  $prodId=$_POST['produit'];
  $prodDiscount=new ProduitDiscount($prodId,$_POST['discount']);
  if(existDiscount($prodId))
  {
    modifierProduitDiscount($prodDiscount);
  }else {
    ajouterProduitDiscount($prodDiscount);
  }
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
      <li><a href="menuAdmin.php">Discount</a></li>
      <li><a href="#" class="active">Add</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Add Product discount</h3>
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
                <label for="titre">Produit</label>
                <?php
                $prods=afficherProduitShop();
                ?>
                <select class="form-control" name="produit">
                  <?php
                  foreach ($prods as $prod) {
                    ?>
                    <option value="<?php echo $prod['id'] ?>"><?php echo $prod['titre'] ?></option>
                    <?php
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Discount (%) </label>
                <input id="price" type="number" min="0" max="90" class="form-control" name="discount" value="1" required>
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
