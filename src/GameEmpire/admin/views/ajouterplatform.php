<?PHP
include "../entities/platform.php";
include "../core/platformC.php";

if (isset($_POST['name']) and isset($_POST['id_plat']))
{

	
$platform1=new platform($_POST['name'],$_POST['id_plat']);

$platform1C=new platformC();
$platform1C->ajouterplatform($platform1);
//header('Location: afficherplatform.php');-->
header('Location: products1.php');
}else{
	echo "vérifier les champs";
}

?>