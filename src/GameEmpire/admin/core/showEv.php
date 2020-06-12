<?PHP
include "eventc.php";
$eventc=new eventc();
$listeevent=$eventc->showEvents();

//var_dump($listeproduits->fetchAll());
?>
<table border="1">
<tr>
<td>id_event</td>	
<td>id_org</td>

<td>name</td>
<td>date_start</td>
<td>date_end</td>
<td>location</td>

<td>delete</td>
<td>modify</td>
</tr>

<?PHP
foreach($listeevent as $row){
	?>
	<tr>
    
	<td><?PHP echo $row['id_event']; ?></td>
	<td><?PHP echo $row['id_org']; ?></td>
	
		<td><?PHP echo $row['namee']; ?></td>
		
	<td><?PHP echo $row['date_start']; ?></td>
	<td><?PHP echo $row['date_end']; ?></td>
		<td><?PHP echo $row['location']; ?></td>
	
	<td><form method="POST" action="deleteEvent.php">
	<input type="submit" href="showEvent.php" name="Delete" value="Delete">
	<input type="hidden" value="<?PHP echo $row['id_event']; ?>" name="id_event">
	</form>
	</td>
	<td><a href="modifierproduit.php?id_org=<?PHP echo $row['id_event']; ?>">
	Update</a></td>
	</tr>
	<?PHP
}
?>
</table>
