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
include "../entities/event.php";
include "eventc.php";
  
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$connect = mysqli_connect("localhost", "root", "","game_empire");


    $query = "SELECT * FROM event";

	$result=mysqli_query($connect,$query);
	
	if (isset($_POST['add2'])) 
    {
        $id_event=$_POST['id_event'];
    $id_org=$_POST['id_org'];
	$pic=$_POST['pic'];
	$namee=$_POST['namee'];
	$typee=$_POST['typee'];
    $date_start=$_POST['date_start'];
    $date_end=$_POST['date_end'];
	$location=$_POST['location'];
	$detail=$_POST['detail'];
	$video=$_POST['video'];
    $site=$_POST['site'];
    

    

    $sql1="select * from event where id_event='$id_event'";
	$result=mysqli_query($connect,$sql1);
	if (mysqli_num_rows($result)==0) {

		$sql2="INSERT INTO event (id_event,id_org,pic,namee,typee,date_start,date_end,location,detail,video,site) VALUES ( '$id_event','$id_org','$pic','$namee','$typee','$date_start','$date_end','$location','$detail','$video','$site');";
		mysqli_query($connect,$sql2);
		header("Location: ../views/collab2.php?add2=1");exit();}

		

else {
	header("Location: ../views/collab2.php?add2=0");exit();



}

}



?>