<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <?php

  require '../entities/Produit.php';
  require '../core/ProduitC.php';

  $prodUpdate=null;

  if(isset($_POST['idSup'])){
    supprimerProduit($_POST['idSup']);
  }

  if(isset($_POST['idUpdate'])){
    $prodUpdate=getProduitById($_POST['idUpdate']);

  }

  if(isset($_POST['titre'])){
    //ajout produit

    $photoLink="img/default.jpg";
    $upload=false;
    //contrôle saisie
    if($_FILES['photo']['size']!=0){
      //img
      $now=date('dmY_Gis');
      $ext=pathinfo($_FILES['photo']['name'])['extension'];
      $_FILES['photo']['name']="{$now}.{$ext}";
      $photoLink="img/{$_FILES['photo']['name']}";
      $check = getimagesize($_FILES['photo']["tmp_name"]);
      $upload=true;
    }

    $titre=$_POST['titre'];
    $description=$_POST['description'];
    $photo=$photoLink;
    $categorie=$_POST['categorie'];
    $soustype=$_POST['soustype'];

    $produit=new Produit(nulll,$titre,$description,$photo,$categorie,$soustype,date('d/m/Y'));

    if($upload==true){
      if( $check['mime'] != 'image/jpeg' || $check['mime'] != 'image/png'){
        $target_dir = "stockage/";
        move_uploaded_file($_FILES['photo']["tmp_name"], $target_dir.$photo);
      }
    }
    ajouterProduit​($produit);
  }

  $prods=afficherProduit();
  echo "<table border='2' width='100%'><thead><th>Titre</th><th>Description</th><th>Photo</th><th>Categorie</th><th>Date</th><th>Actions</th></thead>";
  foreach ($prods as $prod) {
    echo "<tr>";
    echo "<td>{$prod['titre']}</td><td>{$prod['description']}</td><td>{$prod['photo']}</td><td>{$prod['categorie']}</td><td>{$prod['date']}</td>";
    ?>
    <td>
      <form action="" method="post">
        <input type="hidden" name="idSup" value="<?php echo $prod['id'] ?>">
        <input type="submit" name="" value="supprimer">
      </form>
      <form action="" method="post">
        <input type="hidden" name="idUpdate" value="<?php echo $prod['id'] ?>">
        <input type="submit" name="" value="modifier">
      </form>
    </td>
    <?php
    echo "</tr>";
  }
  echo "</table>";

  ?>

  <span>Ajouter Produit</span>
  <form class="" action="" method="POST" enctype="multipart/form-data">
    <table>
      <tr>
        <td>Titre : </td>
        <td><input type="text" name="titre" value="<?php echo isset($prodUpdate) ? $prodUpdate->getTitre() : ''  ?>" required></td>
      </tr>
      <tr>
        <td>Description : </td>
        <td>
          <textarea name="description" rows="8" cols="80" required>
            <?php echo isset($prodUpdate) ? $prodUpdate->getDescription() : '' ?>
          </textarea>
        </td>
      </tr>
      <tr>
        <td>Photo : </td>
        <td>
          <?php if(isset($prodUpdate)){ ?>
          <img src="stockage/<?php echo $prodUpdate->getPhoto() ?>" alt="">
        <?php }else ?>
          <input type="file" name="photo" accept="image/jpeg,image/x-png" value="">
        </td>
      </tr>
      <tr>
        <td>Categorie : </td>
        <td>
          <select class="" name="categorie" required>
            <option value="menu" <?php echo isset($prodUpdate) && $prodUpdate->getCategorie()=="menu" ? "selected" : ""; ?>>Menu</option>
            <option value="shop" <?php echo isset($prodUpdate) && $prodUpdate->getCategorie()=="shop" ? "selected" : ""; ?>>Shop</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Sous Type : </td>
        <td>
          <select class="" name="soustype" required>
            <option value="coffee">Coffee</option>
            <option value="dessert">Dessert</option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="" value="Ajouter">
        </td>
      </tr>
    </table>
  </body>
  </html>
