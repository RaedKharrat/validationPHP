<?php
require_once '../core/EspaceC.php';

if(isset($_POST['idSup'])){
  supprimerEspace($_POST['idSup']);
}

include_once 'includes/header.inc.php';

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Table
      <small>Menu</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#" class="active">Table</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">List Tables</h3>
            <style media="screen">
              @media (max-width: 751px){
                #searshForm{
                  margin-bottom:20px;
                  margin-left:0;
                }
              }
            </style>
            <div id="searshForm" class="input-group col-md-3" style="margin-left:20px;">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
            <span class="pull-right">
              <button id="emptyTables" type="button" class="btn btn-primary" name="button">
                <i class="fa fa-refresh"></i>Update/Empty Tables
              </button>
              <button id="addBtn" type="button" class="btn btn-success" name="button">
                <i class="fa fa-plus"></i>Add
              </button>
            </span>
          </div>
          <div class="box-body">
            <table id="" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Place/Table</th>
                  <th>Total</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $espaces=afficherEspace();

                foreach ($espaces as $espace) {
                  ?>
                  <tr>
                    <td><?php echo $espace['nbplace'] ?></td>
                    <td><span class="label label-primary"><?php echo $espace['tot'] ?></span></td>
                    <td>
                      <form class="" action="" method="post">
                        <input type="hidden" name="idSup" value="<?php echo $espace['nbplace'] ?>">
                        <button type="submit" name="" type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                          Supprimer
                        </button>
                      </form>

                    </td>
                  </tr>

                  <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<script src="assets/js/adminTable.js"></script>

<?php
include_once 'includes/footer.inc.php';
?>
