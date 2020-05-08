<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/report.php";
include "../core/reportC.php";
if (isset($_GET['id'])){
	$reportC=new ReportC();
    $result=$reportC->recupererReport($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$username=$row['username'];
		$date=$row['date'];
		$text=$row['text'];
		$topic=$row['topic'];
?>
<form method="POST">
<table>
<caption>Change Report</caption>
<tr>
<td>Id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>Text</td>
<td><input type="text" name="text" value="<?PHP echo $text ?>"></td>
</tr>
<tr>
<td>Topic</td>
<td><input type="text" name="topic" value="<?PHP echo $topic ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="change" value="change"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['change'])){
	$report=new report($_POST['id'],$_POST['username'],$_POST['date'],$_POST['text'],$_POST['topic']);
	$report->modifierReport($report,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherReport.php');
}
?>
</body>
</HTMl>