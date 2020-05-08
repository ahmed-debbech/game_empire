<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/key.php";
include "../core/keyC.php";
if (isset($_GET['code'])){
	$keyC=new KeyC();
    $result=$keyC->recupererKey($_GET['code']);
	foreach($result as $row){
		$code=$row['code'];
		$username=$row['username'];
		$idGame=$row['idGame'];
		$date=$row['date'];
?>
<form method="POST">
<table>
<caption>Change Key</caption>
<tr>
<td>Code</td>
<td><input type="text" name="code" value="<?PHP echo $code ?>"></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" value="<?PHP echo $username ?>"></td>
</tr>
<tr>
<td>IdGame</td>
<td><input type="number" name="idGame" value="<?PHP echo $idGame ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<tr>
<td></td>
<td><input type="submit" name="change" value="change"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="code_ini" value="<?PHP echo $_GET['code'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['change'])){
	$key=new key($_POST['code'],$_POST['username'],$_POST['idGame'],$_POST['date']);
	$key->modifierKey($key,$_POST['code_ini']);
	echo $_POST['code_ini'];
	header('Location: afficherKey.php');
}
?>
</body>
</HTMl>