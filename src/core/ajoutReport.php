<?PHP
include_once "../entities/report.php";
include_once "../core/reportC.php";
include_once "../entities/report_key.php";
include_once "keyC.php";
if(isset($_POST["topic"]) && isset($_POST["message"])){
	$report1 = new Report($id_like = rand(100,99999), $_SESSION["username"], date("Y-m-d"), $_POST["message"], $_POST["topic"]);
	$report1C=new ReportC();
	$report1C->ajouterReport($report1);
	header("Location: ../reportsent.html");
}else{
	if(isset($_POST["key_code"]) && isset($_POST["message"])){
		$report1 = new reportKey($id_like = rand(100,99999), $_SESSION["username"], date("Y-m-d"), $_POST["message"], $_POST["key_code"]);
		$report1C=new ReportC();
		$test = $report1C->ajouterReportKey($report1);
		if($test == true){
			header("Location: ../reportsent.html");
			//delete key automatically
			$key = new KeyC();
			$key->setInvalid($_POST["key_code"]);
			//adding new key after delete
			include_once "generateKey.php";
		}else{
			header("Location: ../keynotfound.html");
		}
	}else{
		echo "Check Your Datas";

	}
}
?>