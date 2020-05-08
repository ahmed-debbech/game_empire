<?PHP
include "../entities/report.php";
include "../core/reportC.php";
$report=new Report(75757575,'BEN Ahmed','Salah',50,20);
$reportC=new ReportC();
$reportC->afficherReport($report);




?>