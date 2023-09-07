<?php

require_once '../core/EspaceC.php';
require_once '../entities/Espace.php';

//controle
if(isset($_POST['nbPlaces'])){
  //ajout espace

  $nbPlaces=$_POST['nbPlaces'];

  $espace=new Espace(null,$nbPlaces);

  ajouterEspace($espace);
  //redirection
  header('Location: tableAdmin.php');
}

include_once 'includes/header.inc.php';

?>

<!--content-->
<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Table
    </h1>
    <ol class="breadcrumb">
      <li><a href="Khammeri"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="tableAdmin.php">Table</a></li>
      <li><a href="#" class="active">Add</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header form-inline">
            <h3 class="box-title">Add Table</h3>
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
            <form action="#" method="post">
              <div class="form-group">
                <label for="nbPlaces">Nombre de place</label>
                <input id="nbPlaces" type="number" min="0" max="999" step="1" class="form-control" name="nbPlaces" value="1" required>
              </div>
              <input type="submit" class="btn btn-primary" value="Add">
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
