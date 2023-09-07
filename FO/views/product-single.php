<?php
require_once '../core/ProduitC.php';
require_once '../entities/Produit.php';
include_once 'includes/header.inc.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="./"><img src="assets/images/logoobladi.png" style="width: 55px;"></small></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="./" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
        <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
        <?php
        if(!isset($_SESSION['id'])) { ?>
          <li class="nav-item"><a href="../../Obladi/views/front/login.php" class="nav-link btn btn-primary" >Sign in/Sign up</a></li>
          <?php
        }else{
          ?>
          <li  class="nav-item dropdown" class="nav-item" ><a href="../../Obladi/views/front/myaccount.php" class="nav-link btn btn-primary" > <?php echo $_SESSION['nom']; ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" name="logout" href="logout.php">logout</a>
            </div></li>
            <?php
          }
          ?>
          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small><?php echo count($_SESSION['cart']); ?></small></span></a></li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- END nav -->
  <!-- END nav -->

  <section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Product Detail</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!--get info product by id-->

  <?php
  $prod=null;
  $id=$_GET['id'];
  if(is_numeric(trim($id))){
    $prod=getProduitById($id);
  }
  //controle
  if(!$prod){
    $prod=getLastProduct();
  }

  ?>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 ftco-animate">
          <a href="stockage/<?php echo $prod->getPhoto(); ?>" class="image-popup"><img src="stockage/<?php echo $prod->getPhoto(); ?>" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-lg-6 product-details pl-md-5 ftco-animate">
          <h3><?php echo $prod->getTitre(); ?></h3>
          <p class="price"><span><?php echo $prod->getPrix(); ?> DT</span></p>
          <p><?php echo $prod->getDescription(); ?></p>
          <div class="row mt-4">

            <div class="w-100"></div>
            <div class="input-group col-md-6 d-flex mb-3">
              <span class="input-group-btn mr-2">
                <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                  <i class="icon-minus"></i>
                </button>
              </span>
              <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
              <span class="input-group-btn ml-2">
                <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                  <i class="icon-plus"></i>
                </button>
              </span>
            </div>
          </div>
          <p><a href="cart.php?idProd=<?php echo $prod->getId(); ?>" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-left mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-left">
          <span class="subheading">Leave us some notes</span>
          <!--
          <h2 class="mb-4">Our products</h2>
          <p>bakchi nbadil feha</p>-->
        </div>
      </div>
      <div class="row ftco-animate">
        <!--stars-->

        <!--dir:direction-->
        <div class="ratings clearfix container" dir="rtl">
          <span numberElem="1" class="star ion-md-star-outline"></span>
          <span numberElem="2" class="star ion-md-star-outline"></span>
          <span numberElem="3" class="star ion-md-star-outline"></span>
          <span numberElem="4" class="star ion-md-star-outline"></span>
          <span numberElem="5" class="star ion-md-star-outline"></span>
        </div>

        <form class="contact-form container" action="comments.php" method="post">
          <!--id for comments-->
          <input type="hidden" name="idComments" readonly value="<?php echo $prod->getId() ?>">

          <!--nbr de stars-->
          <input type="hidden" id="nbStars" name="nbStars" readonly value="0">

          <div class="form-group">
            <textarea name="msg" id="" cols="30" rows="7" class="form-control"
            placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>

        </form>
      </div>
    </div>
  </section>
  <?php include_once 'includes/footer.inc.php'; ?>

  <script>
  $(document).ready(function(){

    var quantitiy=0;
    $('.quantity-right-plus').click(function(e){

      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      var quantity = parseInt($('#quantity').val());

      // If is not undefined

      $('#quantity').val(quantity + 1);


      // Increment

    });

    $('.quantity-left-minus').click(function(e){
      // Stop acting like a button
      e.preventDefault();
      // Get the field name
      var quantity = parseInt($('#quantity').val());

      // If is not undefined

      // Increment
      if(quantity>0){
        $('#quantity').val(quantity - 1);
      }
    });

  });
  </script>
