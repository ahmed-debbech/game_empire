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

if (isset($_POST['username']) and isset($_POST['firstname']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['address']) and isset($_POST['phone']) )
{
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$companyname=$_POST['companyname'];
		$town=$_POST['town'];
		$state=$_POST['state'];
		$postcode=$_POST['postcode'];
		$phone=$_POST['phone'];
		$country=$_POST['country'];
		
		$sql="insert into user (username,password,email,firstname,lastname,companyname,town,state,postcode,country,phone,address,role) values ('$user','$pass','$email','$firstname','$lastname','$companyname','$town','$state','$postcode','$country','$phone','$address',0)";
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