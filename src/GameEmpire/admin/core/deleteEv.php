<?PHP

include "eventc.php";
session_start();
$eventc=new eventc();
if (isset($_POST["Delete2"])){
	$eventc->deleteEvent($_POST["id_event"]);
	header("Location: ../views/collab2.php");exit();
	
}

?>