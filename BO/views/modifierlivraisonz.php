<?php
require_once '../core/livraisonC.php';
include_once 'includes/header.inc.php';
?>

<script type="text/javascript">
function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  else if (Notification.permission === "granted") {
    notify();
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
        notify();
      }
    });
  }

  function notify() {
    var notification = new Notification('LIVRAISON', {
      icon: '../notifier.png',
      body: "Hey! LIVRAISON modifié avec succés!",

    });

    notification.onclick = function () {
      window.location.replace("a.php");
    };
    setTimeout(notification.close.bind(notification), 7000);
  }

}
</script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>

      <small>Modifier livraison</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Gestion de la livraison</a></li>
      <li class="active">Modifier livraison</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>

          <div class="box-body">

            <?PHP
            include "../entities/livraison.php";
            if (isset($_GET['cin'])){
              $result=recupererlivraison($_GET['cin']);
              foreach($result as $row){
                $cin=$row['cin'];
                $nom=$row['nom'];
                $prenom=$row['prenom'];
                $ville=$row['ville'];
                $mail=$row['mail'];
                $postal=$row['postal'];
                $etat=$row['etat'];


                ?>
                <form method="POST">
                  <table class="table table-bordered">
                    <caption>Modifier livraison</caption>
                    <tr>
                      <td>cin</td>
                      <td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
                    </tr>
                    <tr>
                      <td>nom</td>
                      <td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
                    </tr>
                    <tr>
                      <td>prenom</td>
                      <td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
                    </tr>
                    <tr>
                      <td>ville</td>
                      <td>
                        <select name="ville" id="country" >
                          <option value="none">Sélectionnez votre region</option>
                          <option >Ariana</option>
                          <option >Les Berges  du lac</option>
                          <option >Menzah </option>
                          <option >Ariana </option>

                          <option value="us"></option>
                          <option value="fr"></option>
                        </select>
                      </td>
                    </tr><tr>
                      <td>mail</td>
                      <td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
                    </tr>
                    <tr>
                      <td>Etat</td>
                      <td><select name="etat" >
                        <option>0</option>
                        <option>1</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <tr>
                      <td>postal</td>
                      <td><input type="number" name="postal" value="<?PHP echo $postal ?>"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="submit" name="modifier" value="modifier"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>" ></td>
                    </tr>
                  </table>
                </form>

                <?PHP
              }
            }
            if (isset($_POST['modifier'])){
              $livraison=new livraison($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['mail'],$_POST['postal'],$_POST['etat']);
              modifierlivraison($livraison,$_POST['cin_ini']);
              //header('Location: a.php');
              echo "<script language=javascript>
              notifyMe();
              </script>";
            }
            ?>

          </div>
          <!-- /.box-body -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>

    <?php
    include_once 'includes/footer.inc.php';
    ?>
