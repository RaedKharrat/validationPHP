<?php

include_once '../core/CommandeC.php';
include_once '../entities/Commande.php';

if(isset($_POST['Modifier']))
{
 $id=new commande ($_POST['numc'],$_POST['receveur'],$_POST['transit'],$_POST['modalite'],$_POST['prix']);
 modifier($id);
}

include_once 'includes/header.inc.php';
$factureActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>


  <section class="ftco-section ftco-services">
   <fieldset >
      <form name="f1"  method="POST" action="modifc.php" onSubmit="return verif()" >
         <center><legend><h2> Modifier commande </h2></legend></center>
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
          <td><input type="submit"  name="Modifier" value="Modifier"/></td>
        </tr>
        </table>
      </form>
    </fieldset>
</section>
<script type="text/javascript">
  function verif()
  {
    var i=0;
    if(f1.numc.value=="")
    {
      alert("saisir votre num  commande");
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
<?php include_once 'includes/afterService.inc.php'; ?>
