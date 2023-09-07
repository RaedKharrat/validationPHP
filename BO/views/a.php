<?php
require_once '../core/livraisonC.php';
include_once 'includes/header.inc.php';
$listelivraisons=afficherlivraisons();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gestion de la livraison
      <small>Livraison</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Gestion de la livraison</a></li>
      <li class="active">Livraison</li>
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
                  <th>ville</th>
                  <th>mail</th>
                  <th>postal</th>
                  <th>etat</th>
                  <th>Actions</th>
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
                  <td><?PHP echo $row['mail']; ?></td>
                  <td><?PHP echo $row['postal']; ?></td>
                  <td><?PHP echo $row['etat']; ?></td>

                  <td>
                    <form method="POST" action="supprimerlivraison.php">
                      <input type="submit" name="supprimer" value="supprimer">
                      <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                    </form>
                    <a href="modifierlivraisonz.php?cin=<?PHP echo $row['cin']; ?>">
                      Modifier</a>
                      <form method="POST" action="archiverlivraison.php">
                        <input type="submit" name="archiver" value="archiver">
                        <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                      </form>
                    </td>
                  </tr>
                  <?PHP
                }
                ?>
              </tfoot>
              <tr><a href="rechercherlivraison.php?cin=<?PHP echo $row['cin']; ?>">
                Rechercher</a></tr>
              </table>
              <?php
              echo "<p id='imprimer'><a href='' onclick='window.print();return false;'>imprimer</a></p>";
              ?>
            </div>
            <!-- /.box-body -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->

      </section>

    <?php
    include_once 'includes/footer.inc.php';
    ?>
