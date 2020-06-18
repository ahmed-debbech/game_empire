<?PHP
include "../core/keyC.php";
$keyC=new KeyC();
if (isset($_POST["code"])){
	$keyC->supprimerKey($_POST["code"]);
	header('Location: afficherKey.php');
}

?>