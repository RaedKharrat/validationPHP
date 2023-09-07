<?PHP
include "../../core/livreurC.php";
$livreur1C=new livreurC();
$listelivreurs=$livreur1C->afficherlivreurs();

?>
<table border="1">
<tr>
<td>login</td>
<td>mdp</td>
<td>salaire</td>
<td>cinL</td>
<td>trier</td>
<td>rechercher</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['login']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	<td><?PHP echo $row['cinL']; ?></td>
	<td><?PHP echo $row['salaire']; ?></td>
	
	<td><form method="POST" action="supprimerlivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['login']; ?>" name="login">
	</form>
	</td>
	<td><a href="modifierlivreur.php?login=<?PHP echo $row['login']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


