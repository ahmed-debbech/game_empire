<?PHP
//views
include "../core/reprotC.php";
$report1C=new ReportC();
$listeReports=$report1C->afficherReport();

//var_dump($listeReports->fetchAll());
?>
<table border="1">
<tr>
<td>Id</td>
<td>Username</td>
<td>Date</td>
<td>Text</td>
<td>Topic</td>
<td>Delete</td>
<td>Change</td>
</tr>

<?PHP
foreach($listeReports as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['username']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['text']; ?></td>
	<td><?PHP echo $row['topic']; ?></td>
	<td><form method="POST" action="supprimerReport.php">
	<input type="submit" name="Delete" value="Delete">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierReport.php?id=<?PHP echo $row['id']; ?>">
	Change</a></td>
	</tr>
	<?PHP
}
?>
</table>