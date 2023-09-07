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
        <center><legend><h2> Recherche facture </h2></legend></center>
        <form name="Form2" method="POST" onsubmit="rechf.php">
          <fieldset>
            <center>
              Rechercher
              <input type="number" name="recherch">
              <input type="submit" name="chercher" value="chercher"></br>
            </center>
            <table id="example1" class="table table-striped">
              <tr>
                <td> num facture </td>  <td> quantite </td> <td> unite </td>  <td> description </td>  <td>num commande </td>
                <td>supprimer facture</td>  <td>Modifier facture</td>
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
                  <td><a href="suppf1.html">Supprimer</a></td>
                  <td><a href="modiff1.html">Modifier</a></td>
                </tr>
                <?php
              }
            }
            else
            {
              if(($_POST['recherch'])!=null){
                $mouhib=rechercher($_POST['recherch']);
                foreach ($mouhib as $res){
                  ?>
                  <tr>
                    <td><?php echo $res['numf']; ?></td>
                    <td><?php echo $res['quantite']; ?></td>
                    <td><?php echo $res['unite']; ?></td>
                    <td><?php echo $res['description']; ?></td>
                    <td><?php echo $res['numeroc']; ?></td>
                    <td><a href="suppf1.html">Supprimer</a></td>
                    <td><a href="modiff1.html">Modifier</a></td>
                  </tr>
                  <?php
                }
              }
            }
            ?>


          </table>



        </fieldset>
      </form>
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
