<?php
require_once '../core/ProduitC.php';
require_once '../core/ProduitDiscountC.php';
require_once '../entities/Produit.php';
require_once '../entities/ProduitDiscount.php';
include_once 'includes/header.inc.php';
//controle de saisie
if(isset($_GET['idProd'])){
  $prodAddToCart=$_GET['idProd'];
}
if(isset($_GET['idDel'])){
  $idDel=$_GET['idDel'];
  if(is_numeric($idDel)){
    unset($_SESSION['cart'][$idDel]);
  }
}
//controle saisie
if(isset($prodAddToCart) && is_numeric($prodAddToCart)){
  if(isset($_SESSION['cart'][$prodAddToCart])){
    $_SESSION['cart'][$prodAddToCart]++;
  }else {
    $_SESSION['cart'][$prodAddToCart]=1;
  }
}

include_once 'includes/navbar.inc.php';

?>

  <section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Cart</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="./">Home</a></span> <span>Cart</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-cart">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="cart-list">
            <table class="table">
              <thead class="thead-primary">
                <tr class="text-center">
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <?php
                //init Total
                $subTotal=0;
                //parcours produits ajoutés à session
                foreach ($_SESSION['cart'] as $key => $value) {
                  $prod=getProduitById($key);
                  $priceProd=$prod->getPrix();
                  $discount=0;
                  if(existDiscount($prod->getId())){
                    $discountProd=getProduitDiscountById($prod->getId());
                    $discount=$discountProd->getDiscount();
                    $priceWithDiscount=$priceProd-(($priceProd*$discount)/100);
                    $finalPriceProd=$priceWithDiscount;
                  }
                  else {
                    $finalPriceProd=$priceProd;
                  }
                  ?>

                  <tr class="text-center">
                    <td class="product-remove"><a href="cart.php?idDel=<?php echo $key ?>"><span class="icon-close"></span></a></td>

                    <td class="image-prod"><div class="img" style="background-image:url(stockage/<?php echo $prod->getPhoto() ?>);"></div></td>

                    <td class="product-name">
                      <h3><?php echo $prod->getTitre() ?></h3>
                      <p><?php echo $prod->getDescription(); ?></p>
                    </td>

                    <td class="price"><?php echo $priceProd ?> DT</td>

                    <td class="price"><?php echo $discount ?> %</td>

                    <td class="quantity">
                      <div class="input-group mb-3">
                        <input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $value ?>" min="1" max="100">
                      </div>
                    </td>
                    <!--calcul total-->
                    <td class="total"><?php echo $value*$finalPriceProd; ?> DT</td>
                    <!--calcul sub total-->
                    <?php
                    $subTotal+=$value*$finalPriceProd;
                    ?>
                  </tr>

                  <?php

                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
          <div class="cart-total mb-3">
            <h3>Cart Totals</h3>
            <p class="d-flex">
              <span>Subtotal</span>
              <span><?php echo $subTotal ?> DT</span>
            </p>
            <p class="d-flex">
              <span>Delivery</span>
              <span>0 DT</span>
            </p>
            <hr>
            <p class="d-flex total-price">
              <span>Total</span>
              <span><?php echo $subTotal ?> DT</span>
            </p>
          </div>
          <p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-menu">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Products</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row d-md-flex">
        <div class="col-lg-12 ftco-animate p-md-5">
          <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5">
              <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#coffee-tab" role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee to go</a>

                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#drinks-tab" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks to go</a>

                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#desserts-tab" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts to go</a>
              </div>
            </div>
            <div class="col-md-12 d-flex align-items-center">

              <?php

              //crud get list products
              $prods=afficherProduitShop();
              $coffees=array();
              $desserts=array();
              $drinks=array();

              foreach ($prods as $prod) {
                switch ($prod['soustype']) {
                  case 'coffee':
                  array_push($coffees,$prod);
                  break;
                  case 'dessert':
                  array_push($desserts,$prod);
                  break;
                  case 'drink':
                  array_push($drinks,$prod);
                  break;
                }
              }

              ?>

              <div class="tab-content ftco-animate container-fluid" id="v-pills-tabContent">
                <!--Coffee-->
                <div class="tab-pane fade show active" id="coffee-tab" role="tabpanel" aria-labelledby="v-pills-0-tab">
                  <div class="row">

                    <?php

                    foreach ($coffees as $coffee) {
                      ?>

                      <div class="col-md-3">
                        <div class="menu-entry">
                          <!--Getphoto-->
                          <a href="#" class="img" style="background-image: url(stockage/<?php echo $coffee['photo'] ?>);"></a>
                          <div class="text text-center pt-4">
                            <!--Gettitre+id pour redirection-->
                            <h3><a href="product-single.php?id=<?php echo $coffee['id']; ?>"><?php echo $coffee['titre']; ?></a></h3>
                            <!--getDescription-->
                            <p><?php echo $coffee['description']; ?></p>
                            <!--getPrix-->
                            <p class="price"><span><?php echo $coffee['prix']; ?> DT</span></p>
                            <p><a href="cart.php?idProd=<?php echo $coffee['id']; ?>" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                          </div>
                        </div>
                      </div>

                    <?php } ?>

                  </div>
                </div>

                <!--Drinks-->
                <div class="tab-pane fade" id="drinks-tab" role="tabpanel" aria-labelledby="v-pills-1-tab">
                  <div class="row">

                    <?php
                    foreach ($drinks as $drink) {
                      ?>

                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(stockage/<?php echo $drink['photo'] ?>);"></a>
                          <div class="text">
                            <h3><a href="product-single.php?id=<?php echo $drink['id']; ?>"><?php echo $drink['titre'] ?></a></h3>
                            <p><?php echo $drink['description'] ?></p>
                            <p class="price"><span><?php echo $drink['prix'] ?> DT</span></p>
                            <p><a href="cart.php?idProd=<?php echo $drink['id']; ?>" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>

                    <?php } ?>

                  </div>
                </div>

                <!--Desserts-->
                <div class="tab-pane fade" id="desserts-tab" role="tabpanel" aria-labelledby="v-pills-1-tab">
                  <div class="row">

                    <?php
                    foreach ($desserts as $dessert) {
                      ?>

                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(stockage/<?php echo $dessert['photo'] ?>);"></a>
                          <div class="text">
                            <h3><a href="product-single.php?id=<?php echo $dessert['id']; ?>"><?php echo $dessert['titre'] ?></a></h3>
                            <p><?php echo $dessert['description'] ?></p>
                            <p class="price"><span><?php echo $dessert['prix'] ?> DT</span></p>
                            <p><a href="cart.php?idProd=<?php echo $dessert['id']; ?>" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>

                    <?php } ?>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once 'includes/footer.inc.php'; ?>
