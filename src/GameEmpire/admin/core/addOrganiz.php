
<!DOCTYPE html>
<html>
<head>
	<title></title>
		  <script src="../dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../dist/sweetalert.css">
</head>
<body>

</body>
</html>
<?PHP


session_start();

$connect = mysqli_connect("localhost", "root", "","game_empire");


    $query = "SELECT * FROM organizator";

	$result=mysqli_query($connect,$query);
	
	if (isset($_POST['add'])) 
    {

	$id_org=$_POST['id_org'];
	$img=$_POST['img'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    

    $sql1="select * from organizator where id_org='$id_org'";
	$result=mysqli_query($connect,$sql1);
	if (mysqli_num_rows($result)==0) {

		$sql2="INSERT INTO organizator (id_org, img, name, email, phone) VALUES ( '$id_org','$img','$name', '$email', '$phone');";
		mysqli_query($connect,$sql2);
		header("Location: ../views/collab.php?add=1");exit();
		
 }

else {
	header("Location: ../views/collab.php?add=0");exit();
;


}

}

?>