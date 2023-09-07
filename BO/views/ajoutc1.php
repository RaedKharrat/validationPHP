
<?php
include_once 'includes/header.inc.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <h1></h1>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-10 col-xs-10">
        <fieldset >
          <form name="f1" method="POST" action="ajoutc.php" onSubmit="return verif()" >
            <center><legend><h2> Ajouter commande </h2></legend></center>
            <table id="example1" class="table table-striped">
              <tr>
                <td> num commande </td>
                <td><input type="number" name="numc" value=""/></td>
              </tr>
              <tr>
                <td> receveur </td>
                <td><input type="text" name="receveur" value=""/></td>
              </tr>
              <tr>
                <td> transit </td>
                <td><input type="text" name="transit" value=""/></td>
              </tr>
              <tr>
                <td> modalite </td>
                <td><input type="text" name="modalite" value=""/></td>
              </tr>
              <tr>
                <td> prix  </td>
                <td><input type="number" name="prix" value=""/></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit"  name="Ajouter" value="Ajouter"/></td>
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
  if(f1.numc.value=="")
  {
    alert("saisir votre num commande");
    i--;
    return false;
  }
  if(f1.receveur.value=="")
  {
    alert("saisir votre receveur");
    i--;
    return false;
  }
  if(f1.transit.value=="")
  {
    alert("saisir votre transit");
    i--;
    return false;
  }
  if(f1.modalite.value=="")
  {
    alert("saisir votre modalite");
    i--;
    return false;
  }
  if(f1.prix.value=="")
  {
    alert("saisir votre prix");
    i--;
    return false;
  }
  if(i==5)
  {
    return true;
  }
}
</script>


<?php
include_once 'includes/footer.inc.php';
?>
