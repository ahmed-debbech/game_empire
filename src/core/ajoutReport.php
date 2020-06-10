<?PHP
include "../entities/report.php";
include "../core/reportC.php";

if(isset($_POST["topic"]) && isset($_POST["message"])){
	$report1 = new Report($id_like = rand(100,99999), $_SESSION["username"], "8-9-2020", $_POST["message"], $_POST["topic"]);
	$report1C=new ReportC();
	$report1C->ajouterReport($report1);
	header("Location: ../reportsent.html");
}else{
	echo "Check Your Datas";
}

?>