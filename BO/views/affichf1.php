<?php
include_once '../core/FactureC.php';
include_once 'includes/header.inc.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center></center>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-20">
          <?php

          $resultat=afficher();

          ?>

          <center><legend><h2>Affiche Facture</h2></legend></center>

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
        </fieldset>
        <div class="small-box bg-green">


          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">


            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

        </div>
        <!-- /.box -->



      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>

  <?php
  include_once 'includes/footer.inc.php';
  ?>
