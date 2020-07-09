<?PHP
include "../entities/Game.php";
include "../core/GameC.php";

if (isset($_GET['id_game']) and isset($_GET['name']) and isset($_GET['id_plat']) and isset($_GET['release_date']) and isset($_GET['category']) and isset($_GET['price']) and isset($_GET['score'])){
$game1=new Game($_GET['id_game'],$_GET['name'],$_GET['id_plat'],$_GET['release_date'],$_GET['category'],$_GET['price'],$_GET['score']);
$game1C=new GameC();
$game1C->addGame($game1);
	
}else{
	echo "vérifier les champs";
}
//*/

?>