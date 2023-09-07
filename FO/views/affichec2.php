<?php
include_once '../core/CommandeC.php';
include_once 'includes/header.inc.php';
$cmdActive="active";
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
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
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
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
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
          <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/bookATableIntro.inc.php'; ?>

<section class="ftco-about d-md-flex">
  <div class="one-half img" style="background-image: url(assets/images/about.jpg);"></div>
  <div class="one-half ftco-animate">
    <div class="overlap">
      <div class="heading-section ftco-animate ">
        <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Story</h2>
      </div>
      <div>
        <p>Obladi combine coffee place & working space, tout en gardant un esprit eco-friendly. Notre devise: vous proposer un café de qualité, proposé aux standards internationaux, et vous offrir un espace calme, design et propice à la communication, au travail et à la détente.</p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-services">
  <div class="container">
    <div class="row">
      <?php

      $resultat=afficher();

      ?>
      <center>
        <table id="example1" class="table table-striped">
          <tr>
            <td>num comande</td>
            <td>receveur</td>
            <td>transit</td>
            <td>modalite</td>
            <td>prix</td>
          </tr>
          <tr>
            <?php
            foreach ($resultat as $res) {

              ?>
              <tr>
                <td><?php echo $res['numc']; ?></td>
                <td><?php echo $res['receveur']; ?></td>
                <td><?php echo $res['transit']; ?></td>
                <td><?php echo $res['modalite']; ?></td>
                <td><?php echo $res['prix']; ?></td>


              </tr>
              <?php
            }
            ?>
          </tr>
        </table>
      </center>
    </fieldset>
  </div>
</div>
</section>
<?php include_once 'includes/afterService.inc.php'; ?>
