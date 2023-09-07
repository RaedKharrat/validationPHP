<?php
include_once '../core/FactureC.php';
include_once 'includes/header.inc.php';
$factureActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>

<section class="ftco-section ftco-services">
  <div class="container">
    <div class="row">
      <?php
      $resultat=afficher();
      ?>
      <center>
        <table id="example1" class="table table-striped">
          <tr>
            <td>num facture</td>
            <td>quantite</td>
            <td>unite</td>
            <td>description</td>
            <td>num commande</td>
          </tr>
          <tr>
            <?php
            foreach ($resultat as $res) {
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
            ?>
          </tr>
        </table>
      </center>
    </fieldset>
  </div>
</div>
</section>


<?php include_once 'includes/afterService.inc.php'; ?>
