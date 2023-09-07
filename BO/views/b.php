
<?PHP
include "../core/livreurC.php";
include_once 'includes/header.inc.php';
$listelivreurs=afficherlivreurs();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Gestion de la livraison
      <small>Livreurs</small></h1>
      <ol class="breadcrumb">
        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gestion de la livraison</a></li>
        <li class="active">Livreurs</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Livreurs</h3>
            </div>

            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>login</th>
                    <th>mdp</th>
                    <th>salaire</th>
                    <th>cinL</th>
                    <th>Actions</th>
                  </tr>
                </thead>
              </thead>
              <tbody>
                <?PHP
                foreach($listelivreurs as $row){
                  ?>
                  <tr>
                    <td><?PHP echo $row['login']; ?></td>
                    <td><?PHP echo $row['mdp']; ?></td>
                    <td><?PHP echo $row['salaire']; ?></td>
                    <td><?PHP echo $row['cinL']; ?></td>
                    <td>
                      <form method="POST" action="supprimerlivreur.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
                      </form>
                      <form method="POST" action="rechercherListelivreurs">
                        <input type="submit" name="rechercher" value="rechercher">
                        <input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
                      </form>
                      <a href="modifierlivreur.php?login=<?PHP echo $row['login']; ?>">
                        Modifier
                      </a>
                      <form method="POST" action="archiverlivreur.php">
                        <input type="submit" name="archiver" value="archiver">
                        <input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
                      </form>
                    </td>
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
  </div>
  <?php
  include_once 'includes/footer.inc.php';
  ?>


  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  </script>
