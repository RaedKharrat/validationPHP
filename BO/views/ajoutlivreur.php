<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
include_once 'includes/header.inc.php';

if (isset($_POST['login']) and isset($_POST['mdp']) and isset($_POST['salaire']) and isset($_POST['cinL']) )
{
	$livreur1=new livreur($_POST['login'],$_POST['mdp'],$_POST['cinL'],$_POST['salaire']);
	//Partie2
	/*
	var_dump($livraison1);
}
*/
//Partie3
ajouterlivreur($livreur1);
header('Location: b.php');
}

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
		<h1>Gestion de la livraison
			<small>Livreurs</small></h1>
			<ol class="breadcrumb">
				<li><a href="Nermine"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">Gestion de la livraison</a></li>
				<li class="active">Ajouter livreurs</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Ajouter livreurs</h3>
						</div>

						<div class="box-body">

							<form method="POST" action="">
								<table class="table table-bordered">
									<caption>Ajouter livreur</caption>
									<tr>
										<td>login</td>
										<td><input type="text" name="login"></td>
									</tr>
									<tr>
										<td>mdp</td>
										<td><input type="text" name="mdp"></td>
									</tr>
									<tr>
										<td>cinL</td>
										<td><input type="number" min="1" name="cinL"></td>
									</tr>
									<tr>
										<td>salaire</td>
										<td><input type="number" min="1" name="salaire"></td>
									</tr>

									<tr>
										<td></td>
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
