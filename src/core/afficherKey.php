<?PHP
//views
include "../core/keyC.php";
$key1C=new keyC();
$listeKeys=$key1C->afficherKey();

//var_dump($listeKeys->fetchAll());
?>
<table border="1">
<tr>
<td>Code</td>
<td>Username</td>
<td>IdGame</td>
<td>Date</td>
<td>Delete</td>
<td>Change</td>
</tr>

<?PHP
foreach($listeKeys as $row){
	?>
	<tr>
	<td><?PHP echo $row['code']; ?></td>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['idGame']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><form method="POST" action="supprimerKey.php">
	<input type="submit" name="Delete" value="Delete">
	<input type="hidden" value="<?PHP echo $row['code']; ?>" name="code">
	</form>
	</td>
	<td><a href="modifierKey.php?code=<?PHP echo $row['code']; ?>">
	Change</a></td>
	</tr>
	<?PHP
}
?>
</table>