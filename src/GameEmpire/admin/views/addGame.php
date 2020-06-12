<?PHP
include "../entities/Game.php";
include "../core/GameC.php";

if (isset($_POST['id_game']) and isset($_POST['name']) 	 and isset($_POST['id_plat']) and isset($_POST['release_date']) and isset($_POST['category']) and isset($_POST['price']) and isset($_POST['score']) and isset($_POST['trailer']))
{
		$game1=new Game($_POST['id_game'],$_POST['name'],$_POST['id_plat'],$_POST['release_date'],$_POST['category'],$_POST['price'],$_POST['solde'],$_POST['score'],$_POST['trailer']);
		$game1C=new GameC();
		$game1C->addGame($game1);
		$connect = mysqli_connect("localhost", "root", "", "gaga");
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$id=  $_POST['id_game'];
		$query = "INSERT INTO image(id_game,name) VALUES ('$id','$file')";  
		if(mysqli_query($connect, $query)) 
        {
            header("Location: products.php?add=1");
            exit();
        }
        else
        {
            header("Location: products.php?add=0");
            exit();
        }
//*/
}
?>
