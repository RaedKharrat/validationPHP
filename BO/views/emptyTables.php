<?php

require_once '../core/EspaceC.php';
include_once 'includes/header.inc.php';


?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Empty Table
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#" class="active">Empty Table</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Empty Tables</h3>
            <style media="screen">
            @media (max-width: 751px){
              #searshForm{
                margin-bottom:20px;
                margin-left:0;
              }
            }
            </style>
          </div>
          <div class="box-body">
            <?php
            //controle
            if(isset($_POST['nbTables'])){
              $nbPlaces=trim($_POST['nbTables']);
              if (is_numeric($nbPlaces)) {
                emptyPlaces($nbPlaces);
                ?>
                <div class="alert alert-success" role="alert">
                  Update Success
                </div>
                <?php
              }
            }
            ?>
            <form action="#" method="post">
              <div class="form-group">
                <label for="nbTables">Nb Tables</label>
                <input id="nbTables" type="number" class="form-control" name="nbTables" min="0" max="50" value="0" placeholder="Nb Places">
              </div>
              <input type="submit" class="btn btn-primary" value="Empty">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
include_once 'includes/footer.inc.php';
?>
