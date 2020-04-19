<?PHP

include "../core/platformC.php";

$platformC=new platformC();
if (isset($_POST["id_plat"])){
	$platformC->supprimerplatform($_POST["id_plat"]);
	header('Location: products1.php');
	
}

?>