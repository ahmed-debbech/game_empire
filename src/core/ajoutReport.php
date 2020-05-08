<?PHP
include "../entities/report.php";
include "../core/reportC.php";

if (isset($_POST['id']) and isset($_POST['username']) and isset($_POST['date']) and isset($_POST['text']) and isset($_POST['topic'])){
$report1=new report($_POST['id'],$_POST['username'],$_POST['date'],$_POST['text'],$_POST['topic']);
//Partie2
/*
var_dump($report1);
}
*/
//Partie3
$report1C=new ReportC();
$report1C->ajouterReport($report1);

}else{
	echo "Check Your Datas";
}
//*/

?>