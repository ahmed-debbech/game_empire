<?PHP
include "../core/reportC.php";
$reportC=new ReportC();
if (isset($_POST["id"])){
	$reportC->supprimerReport($_POST["id"]);
	header('Location: afficherReport.php');
}

?>