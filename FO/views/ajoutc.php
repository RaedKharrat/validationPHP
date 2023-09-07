<?php

include_once '../entities/Commande.php';
include_once '../core/CommandeC.php';

if(isset($_POST['Ajouter']))
{
  $soi=new commande($_POST['numc'],$_POST['receveur'],$_POST['transit'],$_POST['modalite'],$_POST['prix']);
  ajouter($soi);
  require_once './testMail.php';
}

include_once 'includes/header.inc.php';
$cmdActive="active";
include_once 'includes/navbar.inc.php';
include_once 'includes/beforeService.inc.php';
?>

<section class="ftco-section ftco-services">
  <fieldset >
    <center>
      <form name="f1"  method="POST" action="" onSubmit="return verif()" >
        <legend><h2> Ajouter commande </h2></legend>
        <br>
        <style>
        #example1 .form-control{
          border: 0.1px solid !important;
          border-color: white !important;
          width: 80%;
        }
        </style>
        <table id="example1" class="table table-striped">

          <tr>
            <td> num commande </td>
            <td><input type="number" class="form-control" name="numc" value=""/></td>
          </tr>

          <tr>
            <td> receveur </td>
            <td><input type="text" class="form-control" name="receveur" value=""/></td>
          </tr>

          <tr>
            <td> transit </td>
            <td><input type="text" class="form-control" name="transit" value=""/></td>
          </tr>

          <tr>
            <td> modalite </td>
            <td><input type="text" class="form-control" name="modalite" value=""/></td>
          </tr>

          <tr>
            <td> prix  </td>
            <td><input type="number" class="form-control" name="prix" value=""/></td>
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

<?php include_once 'includes/afterService.inc.php'; ?>
