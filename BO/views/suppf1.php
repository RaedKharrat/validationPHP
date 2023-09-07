<?php
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
        <fieldset >
          <form name="f1" method="POST" action="suppf.php" onSubmit="return verif()" >
            <center><legend><h2> Supprimer facture </h2></legend></center>
            <table id="example1" class="table table-striped">
              <tr>
                <td> num facture   </td>
                <td><input type="number" name="numf" value=""/></td>
              </tr>
              <tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="Supprimer" value="Supprimer"/></td>
                </tr>
              </table>
            </form>
          </fieldset>
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

    <script type="text/javascript">
    function verif()
    {
      var i=0;
      if(f1.numf.value=="")
      {
        alert("saisir votre num facture");
        i--;
        return false;
      }
      if(i==1)
      {
        return true;
      }
    }

    </script>

    <?php
    include_once 'includes/footer.inc.php';
    ?>
