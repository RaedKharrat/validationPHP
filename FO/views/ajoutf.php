<?php

include_once '../entities/Facture.php';
include_once '../core/FactureC.php';

if(isset($_POST['Ajouter']))
{
  $soi=new facture($_POST['numf'],$_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['numeroc']);
  ajouter($soi);
}


include_once 'includes/header.inc.php';
$factureActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>

<section class="ftco-section ftco-services">
<fieldset >
  <center>
    <form name="f1"  method="POST" action="" onSubmit="return verif()" >
      <legend><h2> Ajouter facture </h2></legend>
      <style>
      #example1 .form-control{
        border: 0.1px solid !important;
        border-color: white !important;
        width: 80%;
      }
      </style>
      <table id="example1" class="table table-striped">
        <tr>
          <td> num facture </td>
          <td><input type="number" class="form-control" name="numf" value=""/></td>
        </tr>
        <tr>
          <td> quantite </td>
          <td><input type="number" class="form-control" name="quantite" value=""/></td>
        </tr>
        <tr>
          <td> unite </td>
          <td><input type="number" class="form-control" name="unite" value=""/></td>
        </tr>
        <tr>
          <td> description </td>
          <td><input type="text" class="form-control" name="description" value=""/></td>
        </tr>
        <tr>
          <td> num commande  </td>
          <td><input type="number" class="form-control" name="numeroc" value=""/></td>
        </tr>

        <tr>
          <td></td>
          <td><input type="submit" class="btn py-3 px-4" style="border-radius: 7px;border: 0;" name="Ajouter" value="Ajouter"/></td>
        </tr>

      </table>
    </form>
  </center>
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
