<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
include_once 'includes/header.inc.php';

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['ville']) and isset($_POST['mail'])and isset($_POST['postal']) and isset($_POST['etat'])){
	$livraison1=new livraison($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['mail'],$_POST['postal'],$_POST['etat']);
	//Partie2
	/*
	var_dump($livraison1);
}
*/
//Partie3
ajouterlivraison($livraison1);
header('Location: a.php');

}
//*/
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Gestion de la livraison
			<small>Livraisons</small></h1>
			<ol class="breadcrumb">
				<li><a href="Nermine"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Gestion de la livraison</a></li>
				<li class="active">Livraisons</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Livraisons</h3>
						</div>

						<div class="box-body">


							<form method="POST" action="">
								<table class="table table-bordered">

									<caption>Ajouter livraison</caption>
									<tr>
										<td>cin</td>
										<td><input type="number" min="1" name="cin" required></td>
									</tr>
									<tr>
										<td>nom</td>
										<td><input type="text" name="nom" required pattern ='[A-z]{1,}' oninvalid="setCustomValidity('Veuillez entrer des lettres seulement')"
											oninput="setCustomValidity('')" ></td>
										</tr>
										<tr>
											<td>prenom</td>
											<td><input type="text" name="prenom" required pattern ='[A-z]{1,}' oninvalid="setCustomValidity('Veuillez entrer des lettres seulement')"
												oninput="setCustomValidity('')"></td>
											</tr>
											<tr>
												<td>ville</td>
												<td>
													<select name="ville" id="country" required>
														<option >Sélectionnez votre region</option>
														<option >Ariana</option>
														<option >Les Berges  du lac</option>
														<option >Menzah </option>
														<option >Ariana </option>



														<option value="us"></option>
														<option value="fr"></option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Mail</td>
												<td><input type="email" name="mail" required></td>
											</tr>
											<tr>
												<tr>
													<td>code postal</td>
													<td><input type="number" min="1" name="postal" required></td>
												</tr>
												<tr>
													<td>Etat</td>
													<td><select name="etat" >
														<option>0</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>
													<input type="submit" name="ajouter" value="ajouter">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<!-- /.box-body -->

								<!-- /.box -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</section>
				</div>
				<?php
				include_once 'includes/footer.inc.php';
				?>
