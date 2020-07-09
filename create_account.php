<!DOCTYPE html>
<html>
<head>
	<title></title>
		  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
</head>
<body>

</body>
</html>
<?PHP
include "config.php";

if (isset($_POST['username']) and isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['adress']) and isset($_POST['phone']) )
{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$name=$_POST['name'];
		$adress=$_POST['adress'];
		$phone=$_POST['phone'];
		$sql="insert into user (username,password,email,name,phone,adress,role) values ('$user','$pass','$email','$name','$phone','$adress',0)";
	    $db = config::getConnexion();
	    $req = $db->prepare($sql);
	    if ($req->execute())
        {
        	echo "hi";
            header("Location: index.php?add=1");
            exit();
        }
        else
        {
            header("Location: index.php?add=0");
            exit();
        }

}
?>