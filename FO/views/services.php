<?PHP
include "../core/livraisonC.php";

include_once 'includes/header.inc.php';
$serviceActive="active";
include_once 'includes/navbar.inc.php';

$titreBS=$soustitreBS="Services";
include 'includes/beforeServiceOther.inc.php';

?>

<section class="ftco-section ftco-services">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-choices"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Easy to Order</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-delivery-truck"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            <a href="form.php" class="btn btn-white py-3 px-4">
              Send Delivery
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-coffee-bean"></span></div>
            <div class="media-body">
              <h3 class="heading">Quality Coffee</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  include_once 'includes/footer.inc.php'; ?>
