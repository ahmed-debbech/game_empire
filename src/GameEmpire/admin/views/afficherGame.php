<?PHP
include "../core/gameC.php";
$game1C=new gameC();
$list=$game1C->showGame();


//var_dump($listeetudiant->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP

foreach($list as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_game']; ?></td>
	<td><?PHP echo $row['name']; ?></td>
	<td><?PHP echo $row['id_plat']; ?></td>
	<td><?PHP echo $row['release_date']; ?></td>
	<td><?PHP echo $row['category']; ?></td>
	<td><?PHP echo $row['price']; ?></td>
	<td><?PHP echo $row['score']; ?></td>
	<td>
        <form method="POST"
              action="supprimerEtudiant.php">
	<input type="submit" name="supprimer"
           value="supprimer">
	<input  value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierEtudiant.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


