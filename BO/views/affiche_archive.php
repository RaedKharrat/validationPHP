
<?PHP
include "../core/livraisonC.php";
$listelivraisons=afficher_archive_livraisons();
include_once 'includes/header.inc.php';

//var_dump($listelivraisons->fetchAll());
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gestion de la livraison
      <small>Archive</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Gestion de la livraison</a></li>
      <li class="active">Archive</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>cin</th>
                  <th>nom</th>
                  <th>prenom</th>
                  <th>postal</th>
                  <th>mail</th>
                  <th>ville</th>
                </tr>
              </thead>
            </thead>
            <tbody>
              <?PHP
              foreach($listelivraisons as $row){
                ?>
                <tr>
                  <td><?PHP echo $row['cin']; ?></td>
                  <td><?PHP echo $row['nom']; ?></td>
                  <td><?PHP echo $row['prenom']; ?></td>
                  <td><?PHP echo $row['ville']; ?></td>
                  <td><?PHP echo $row['postal']; ?></td>
                  <td><?PHP echo $row['mail']; ?></td>
                </tr>
                <?PHP
              }
              ?>
            </tfoot>
          </table>
          <?php
          echo "<p id='imprimer'><a href='' onclick='window.print();return false;'>imprimer";
          ?>
        </div>
        <!-- /.box-body -->
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php
include_once 'includes/footer.inc.php';
?>
