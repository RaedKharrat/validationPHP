
<?php
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
          <fieldset >

      <form name="f1" method="POST" action="suppc.php" onSubmit="return verif()" >
 <center><legend><h2> Supprimer commande </h2></legend></center>
         <table id="example1" class="table table-striped">
          <tr>
            <td> Num commande   </td>
            <td><input type="number" name="numc" value=""/></td>
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
    <!-- /.content -->

    <script type="text/javascript">
      function verif()
      {
        var i=0;
        if(f1.numc.value=="")
        {
          alert("saisir votre num commande");
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
