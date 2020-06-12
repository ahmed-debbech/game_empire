<?PHP
include "organizatorc.php";
$organizc=new organizc();
$listeorganiz=$organizc->showOrganizs();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>id_org</td>
<td>name</td>
<td>email</td>
<td>phone</td>

<td>delete</td>
<td>modify</td>
</tr>

<?PHP
foreach($listeorganiz as $row){
	?>
	<tr>

	<td><?PHP echo $row['id_org']; ?></td>
		<td><?PHP echo $row['name']; ?></td>
		<td><?PHP echo $row['email']; ?></td>
		<td><?PHP echo $row['phone']; ?></td>
	
	<td><form method="POST" action="deleteOrganiz.php">
	<input type="submit" href="showOrganiz.php" name="Delete" value="Delete">
	<input type="hidden" value="<?PHP echo $row['id_org']; ?>" name="id_org">
	</form>
	</td>
	<td><form method="POST" action="editOrganiz.php">
	<input type="submit" href="showOrganiz.php" name="Update" value="Update">
	<input type="hidden" value="<?PHP echo $row['id_org']; ?>" name="id_org">
	</form> </td>
	</tr>
	<?PHP
}
?>
</table>
