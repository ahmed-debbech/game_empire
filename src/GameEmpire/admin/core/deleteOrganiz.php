

<?PHP

include "organizatorc.php";
session_start();
$organizc=new organizc();
if (isset($_POST["Delete"])){
	$organizc->deleteOrganiz($_POST["id_org"]);
	header("Location: ../views/collab.php");exit();
	
}

?>