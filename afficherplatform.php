<?PHP
include "../core/platformPC.php";
$platform1C=new platformC();
$listeplatform=$platform1C->afficherplatform();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>name</td>
<td>id_plat</td>

<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeplatform as $row){
	?>
	<tr>

	<td><?PHP echo $row['id_plat']; ?></td>
		<td><?PHP echo $row['name']; ?></td>
	
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_plat']; ?>" name="id_plat">
	</form>
	</td>
	<td><a href="modifierplatform.php?id_plat=<?PHP echo $row['id_plat']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
