<?php
include_once '../core/CommandeC.php';
include_once 'includes/header.inc.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>

      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class=" col-xs-20">
          <?php



          $resultat=afficher();

?>
<center><legend><h2> Recherche commande </h2></legend></center>
<form name="Form2" method="POST" onsubmit="rechc.php">
  <fieldset>
    <center>
    Rechercher <input type="number" name="recherch">
    <input type="submit" name="chercher" value="chercher"></br>
  </center>
    <table id="example1" class="table table-striped">
      <tr>
        <td> num commande </td> <td> receveur </td> <td> transit </td>  <td> modalite </td> <td>prix </td>
        <td>supprimer commande</td> <td>Modifier commande</td>
      </tr>
      <?php

if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

      foreach ($resultat as $res){
      ?>
      <tr>
        <td><?php echo $res['numc'];?></td>
        <td><?php echo $res['receveur'];?></td>
        <td><?php echo $res['transit'];?></td>
        <td><?php echo $res['modalite'];?></td>
        <td><?php echo $res['prix'];?></td>
        <td><a href="suppc1.html">Supprimer</a></td>
        <td><a href="modifc1.html">Modifier</a></td>
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
        <td><?php echo $res['numc'];?></td>
        <td><?php echo $res['receveur'];?></td>
        <td><?php echo $res['transit'];?></td>
        <td><?php echo $res['modalite'];?></td>
        <td><?php echo $res['prix'];?></td>
        <td><a href="suppc1.html">Supprimer</a></td>
        <td><a href="modifc1.html">Modifier</a></td>
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
