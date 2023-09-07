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
        <center><legend><h2>Trier facture</h2></legend></center>
        <?PHP

        $listeclient1=afficherASC();
        $listeclient2=afficherDESC();

        ?>

        <form method="POST" action="tri1.php">



          <center>
            <input type="submit" name="asc" value="ascendant">
            <input type="submit" name="desc" value="descendant">
          </center>





          <?php

          if (isset($_POST['asc'])) {
            ?>
            <table id="example1" class="table table-striped">
              <tr>
                <td>num facture</td>
                <td>quantite</td>
                <td>unite</td>
                <td>description</td>
                <td>num commande</td>
              </tr>


              <?php
              foreach($listeclient1 as $row)
              {
                ?>
                <tr>
                  <td><?php echo $row['numf']; ?></td>
                  <td><?php echo $row['quantite']; ?></td>
                  <td><?php echo $row['unite']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['numeroc']; ?></td>
                </tr>
                <?php
              }
              ?>
            </table>

            <?PHP
          }



          if (isset($_POST['desc'])) {
            ?>
            <table id="example1" class="table table-striped">
              <tr>
                <td>num facture</td>
                <td>quantite</td>
                <td>unite</td>
                <td>description</td>
                <td>num commande</td>
              </tr>


              <?php
              foreach($listeclient2 as $row){
                ?>
                <tr>
                  <td><?php echo $row['numf']; ?></td>
                  <td><?php echo $row['quantite']; ?></td>
                  <td><?php echo $row['unite']; ?></td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['numeroc']; ?></td>
                </tr>
                <?php
              }
              ?>
            </table>
          </form>

          <?PHP
        }


        ?>
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
