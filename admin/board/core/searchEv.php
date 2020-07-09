<?PHP

include "eventc.php";
session_start();
$eventc=new eventc();
if (isset($_POST["scoop"])){
	$eventc->searchEvent($_POST["id_event"]);
	header("Location: ../ev-search-result.php");exit();
	
}

?>