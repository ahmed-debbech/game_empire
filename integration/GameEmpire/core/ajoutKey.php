<?PHP
include "../entities/key.php";
include "../core/keyC.php";

if (isset($_POST['code']) and isset($_POST['username']) and isset($_POST['idGame']) and isset($_POST['date'])){
$key1=new key($_POST['code'],$_POST['username'],$_POST['idGame'],$_POST['date']);
//Partie2
/*
var_dump($key1);
}
*/
//Partie3
$key1C=new KeyC();
$key1C->ajouterKey($key1);

}else{
	echo "Check Your Data";
}
//*/

?>