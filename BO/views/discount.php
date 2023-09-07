<?php
/*
if(isset($_POST['idUpdate'])){
header("location: updateProductShop.php?idUpdate={$_POST['idUpdate']}");
}*/

require_once '../core/ProduitC.php';
require_once '../core/ProduitDiscountC.php';
require_once '../entities/Produit.php';
include_once 'includes/header.inc.php';

if(isset($_POST['idSup'])){
  supprimerProduitDiscount($_POST['idSup']);
}

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Products
      <small>Discount</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Products</a></li>
      <li class="active">Discount</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">List Products discount</h3>
            <style media="screen">
            @media (max-width: 751px){
              #searchForm{
                margin-bottom:20px;
                margin-left:0;
              }
            }
            </style>
            <div id="searchForm" class="input-group col-md-3" style="margin-left:20px;">
              <input type="text" name="searchForm" id="searchInput" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
            <span class="pull-right">
              <button id="addBtn" type="button" class="btn btn-success" name="button">
                <i class="fa fa-plus"></i>Add
              </button>
            </span>
          </div>
          <div class="box-body">
            <!--table des infos-->
            <table id="tableData" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Titre</th>
                  <th>Discount</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $prodsDisc=afficherProduitDiscount();

                foreach ($prodsDisc as $prodDisc) {
                  $prod=getProduitById($prodDisc['idproddiscount']);
                  ?>
                  <tr>
                    <td><?php echo $prod->getTitre(); ?></td>
                    <td><?php echo $prodDisc['discount']; ?></td>
                    <td>
                      <form class="" action="" method="post">
                        <input type="hidden" name="idSup" value="<?php echo $prod->getId(); ?>">
                        <button type="submit" name="" type="button" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                          Supprimer
                        </button>
                      </form>

                      <form class="" action="updateProductDiscount.php" method="get">
                        <input type="hidden" name="idUpdate" value="<?php echo $prod->getId(); ?>">
                        <button type="submit" name="" type="button" class="btn btn-warning">
                          <i class="fa fa-pencil"></i>
                          Modifier
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

<script type="text/javascript">
//ecoute d clic
document.getElementById('addBtn').addEventListener('click',function () {
  window.location.href='addProductDiscount.php';
});

//Recherche

var searchInput=document.getElementById('searchInput');
searchInput.addEventListener('input',function () {
  //event.target
  //console.log(searchInput.value);
  var tableData=document.getElementById('tableData');

  for (var i = 1, row; row=tableData.rows[i]; i++) {
    //console.log(searchInput.value,row.cells[0].innerText!=searchInput.value,row.cells[0].innerText);
    if(searchInput.value!='' && !(row.cells[0].innerText.toLowerCase().includes(searchInput.value.toLowerCase())))
    tableData.rows[i].style.display='none';
    else {
      tableData.rows[i].style.display='table-row';
    }
  }
});

</script>

<?php
include_once 'includes/footer.inc.php';
?>
