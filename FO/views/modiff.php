<?php

include_once '../core/FactureC.php';
include_once '../entities/Facture.php';

if(isset($_POST['Modifier']))
{
  $id=new facture ($_POST['numf'],$_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['numeroc']);
  modifier($id);
}
include_once 'includes/header.inc.php';
$factureActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>

<section class="ftco-section ftco-services">
  <fieldset >
    <form name="f1"  method="POST" action="modiff.php" onSubmit="return verif()" >
       <center><legend><h2> modifier facture </h2></legend></center>
      <table  id="example1" class="table table-striped">
        <tr>
          <td> num facture </td>
          <td><input type="number" name="numf" value=""/></td>
        </tr>
        <tr>
        <td> quantite </td>
        <td><input type="number" name="quantite" value=""/></td>
      </tr>
      <tr>
          <td> unite </td>
          <td><input type="number" name="unite" value=""/></td>
        </tr>
        <tr>
          <td> description </td>
          <td><input type="text" name="description" value=""/></td>
        </tr>
        <tr>
          <td> num commande  </td>
          <td><input type="number" name="numeroc" value=""/></td>
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
    if(f1.numf.value=="")
    {
      alert("saisir votre num facture");
      i--;
      return false;
    }
    if(f1.quantite.value=="")
    {
      alert("saisir votre quantite");
      i--;
      return false;
    }
    if(f1.unite.value=="")
    {
      alert("saisir votre unite");
      i--;
      return false;
    }
    if(f1.description.value=="")
    {
      alert("saisir votre description");
      i--;
      return false;
    }
    if(f1.numeroc.value=="")
    {
      alert("saisir votre numeroc");
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
