<?php
require_once '../core/ProduitNoteC.php';
require_once '../core/ProduitC.php';
require_once '../entities/Produit.php';

include_once 'includes/header.inc.php';


if(isset($_POST['idSup'])){
  supprimerProduitNote($_POST['idSup']);
}

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Comments
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#" class="active">Comments</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">List Comments</h3>
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
          </div>
          <div class="box-body">
            <table id="" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Produit</th>
                  <th>Comments</th>
                  <th>Ratings</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $prods=afficherProduitNote();

                foreach ($prods as $prod) {
                  ?>
                  <tr>
                    <td><?php echo $prod['titre'] ?></td>
                    <td><?php echo $prod['comment'] ?></td>
                    <td><?php echo $prod['rating'] ?></td>
                    <td>
                      <form class="" action="" method="post">
                        <input type="hidden" name="idSup" value="<?php echo $prod['id'] ?>">
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

<?php
include_once 'includes/footer.inc.php';
?>
