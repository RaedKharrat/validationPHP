<?PHP
include_once "../entities/livreur.php";
include_once "../core/livreurC.php";
include_once 'includes/header.inc.php';

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Gestion de la livraison
			<small>Livreurs</small></h1>
			<ol class="breadcrumb">
				<li><a href="Nermine"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Gestion de la livraison</a></li>
				<li class="active">Livreurs</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Livreurs</h3>
						</div>

						<div class="box-body">
							<?php

							if (isset($_GET['login'])){
								$result=recupererlivreur($_GET['login']);
								foreach($result as $row){
									$login=$row['login'];
									$mdp=$row['mdp'];
									$salaire=$row['salaire'];
									$cinL=$row['cinL'];
									?>
									<form method="POST">
										<table>
											<caption>Modifier livreur</caption>
											<tr>
												<td>login</td>
												<td><input type="text" name="login" value="<?PHP echo $login ?>"></td>
											</tr>
											<tr>
												<td>mdp</td>
												<td><input type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
											</tr>
											<tr>
												<td>salaire</td>
												<td><input type="number" name="salaire" value="<?PHP echo $salaire ?>"></td>
											</tr>
											<tr>
												<td>cinL</td>
												<td><input type="number" name="cinL" value="<?PHP echo $cinL ?>"></td>
											</tr>
											<tr>
												<td></td>
												<td><input type="submit" name="modifier" value="modifier"></td>
											</tr>
											<tr>
												<td></td>
												<td><input type="hidden" name="login_ini" value="<?PHP echo $_GET['login'];?>"></td>
											</tr>
										</table>
									</form>
									<?PHP
								}
							}
							if (isset($_POST['modifier'])){
								$livreur=new livreur($_POST['login'],$_POST['mdp'],$_POST['cinL'],$_POST['salaire']);
								modifierlivreur($livreur,$_POST['login_ini']);
								echo $_POST['login_ini'];
								header('Location: b.php');
							}
							?>
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
