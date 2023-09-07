<?php

require_once '../core/FactureC.php';

$produits= pdf();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Obladi | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body onload="window.print();">
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <br>
            <i class="fa fa-globe"></i> Liste de Facture
            <small class="pull-right"></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <br>
          From
          <address>
            <strong>Admin</strong><br>
            Tunis<br>
            Phone: (+216) 22 758 962<br>
            Email: obladi@gmail.com
          </address>
        </div>
        <br>
      </div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Num Facture</th>
            <th scope="col">Quantite </th>
            <th scope="col">Unite</th>
            <th scope="col">Description</th>
            <th scope="col">Numero Commande</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($produits as $produit): ?>
            <tr>
              <td><?PHP echo $produit['numf']; ?></td>
              <td><?PHP echo $produit['quantite']; ?></td>
              <td><?PHP echo $produit['unite']; ?></td>
              <td><?PHP echo $produit['description']; ?></td>
              <td><?PHP echo $produit['numeroc']; ?></td>
            </tr>
          <?php endforeach;
          ?>
        </tbody>
      </table>
    </section>
  </div>
</body>
</html>
