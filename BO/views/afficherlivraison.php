<?PHP
include "../../core/livraisonC.php";
$livraison1C=new livraisonC();
$listelivraisons=$livraison1C->afficherlivraisons();

//var_dump($listelivraisons->fetchAll());
?>
<table border="1">
<tr>
<td>cin</td>
<td>nom</td>
<td>prenom</td>
<td>ville</td>
<td>mail</td>
<td>postal</td>
<td>etat</td>
<td>supprimer</td>
<td>archiver</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listelivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['postal']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><form method="POST" action="supprimerlivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><form method="POST" action="archiverlivraison.php">
	<input type="submit" name="archiver" value="Archiver">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierlivraison.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


