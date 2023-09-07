<?php
include_once '../core/FactureC.php';
include_once 'includes/header.inc.php';
$factureActive="active";
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

<?php
$resultat=afficher();
?>
<section class="ftco-section ftco-services">
  <div class="container">
    <div class="row">

      <form name="Form2" method="POST" onsubmit="rechf1.php">
        <fieldset>
          <center>
            Rechercher <input type="number" name="recherch">
            <input type="submit" name="chercher" value="chercher"></br>
          </center>
          <table id="example1" class="table table-striped">
            <tr>
              <td> num facture </td>  <td> quantite </td> <td> unite </td>  <td> description </td>  <td>num commande </td>

            </tr>
            <?php

            if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
          ))) {

            foreach ($resultat as $res){
              ?>
              <tr>
                <td><?php echo $res['numf']; ?></td>
                <td><?php echo $res['quantite']; ?></td>
                <td><?php echo $res['unite']; ?></td>
                <td><?php echo $res['description']; ?></td>
                <td><?php echo $res['numeroc']; ?></td>

              </tr>
              <?php
            }
          }
          else
          {
            if(($_POST['recherch'])!=null){
              $mouhib=$e->rechercher($_POST['recherch']);
              foreach ($mouhib as $res){
                ?>
                <tr>
                  <td><?php echo $res['numf']; ?></td>
                  <td><?php echo $res['quantite']; ?></td>
                  <td><?php echo $res['unite']; ?></td>
                  <td><?php echo $res['description']; ?></td>
                  <td><?php echo $res['numeroc']; ?></td>

                </tr>
                <?php
              }
            }
          }
          ?>
        </table>
      </fieldset>
    </form>

  </div>
</div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 pr-md-5">
        <div class="heading-section text-md-right ftco-animate">
          <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Menu</h2>
          <p class="mb-4">Obladi combine coffee place & working space, tout en gardant un esprit eco-friendly. Notre devise: vous proposer un café de qualité, proposé aux standards internationaux, et vous offrir un espace calme, design et propice à la communication, au travail et à la détente.</p>
          <p><a href="menu.php" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-1.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a href="#" class="img" style="background-image: url(assets/images/menu-2.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-3.jpg);"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-entry mt-lg-4">
              <a href="#" class="img" style="background-image: url(assets/images/menu-4.jpg);"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(assets/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                <strong class="number" data-number="100">0</strong>
                <span>Coffee Branches</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                <strong class="number" data-number="85">0</strong>
                <span>Number of Awards</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                <strong class="number" data-number="10567">0</strong>
                <span>Happy Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                <strong class="number" data-number="900">0</strong>
                <span>Staff</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/menuShop.inc.php'; ?>

<section class="ftco-section img" id="ftco-testimony" style="background-image: url(assets/images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Customers Says</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
  </div>
  <div class="container-wrap">
    <div class="row d-flex no-gutters">
      <div class="col-lg align-self-sm-end ftco-animate">
        <div class="testimony">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small.&rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="assets/images/person_1.jpg" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony overlay">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="assets/images/person_2.jpg" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end ftco-animate">
        <div class="testimony">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="assets/images/person_3.jpg" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end">
        <div class="testimony overlay">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.&rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="assets/images/person_2.jpg" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg align-self-sm-end ftco-animate">
        <div class="testimony">
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
          </blockquote>
          <div class="author d-flex mt-4">
            <div class="image mr-3 align-self-center">
              <img src="assets/images/person_3.jpg" alt="">
            </div>
            <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include_once 'includes/bookATable.inc.php';
include_once 'includes/footer.inc.php';
?>
