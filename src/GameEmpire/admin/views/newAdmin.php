<?PHP
include "../entities/admin.php";

  
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$connect = mysqli_connect("localhost", "root", "","game_empire");


    $query = "SELECT * FROM admin";

	$result=mysqli_query($connect,$query);
	
	if (isset($_POST['addmin'])) 
    {
        $id=$_POST['id'];
    $mdp=$_POST['mdp'];
    $photo=$_POST['photo'];
	
    

    $sql1="select * from admin where id='$id'";
	$result=mysqli_query($connect,$sql1);
	if (mysqli_num_rows($result)==0) {

		$sql2="INSERT INTO admin (id,mdp,photo) VALUES ( '$id','$mdp','$photo');";
		mysqli_query($connect,$sql2);
		header("Location: login.php?addmin=1");exit();}

		

else {
	header("Location: login.php?addmin=0");exit();



}

}



?>