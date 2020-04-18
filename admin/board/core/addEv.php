<?PHP
/*include ("../entities/organizator.php");
include ("organizatorc.php");
$id=$_POST['id_org'];
    $nom=$_POST['name'];
    $dial=$_POST['phone'];
    $mail=$_POST['email'];
   

if (isset ($_POST['add']))
{

	
$organiz=new organiz($id,$nom,$dial,$mail);

$organizc=new organizc();
$organizc->addOrganiz($organiz);

echo "good";
}else{
	echo "vérifier les champs";
}*/
session_start();

$connect = mysqli_connect("localhost", "root", "","game_empire");


    $query = "SELECT * FROM event";

	$result=mysqli_query($connect,$query);
	
	if (isset($_POST['add2'])) 
    {

		$id_event=$_POST['id_event'];	
    $id_org=$_POST['id_org'];
	$date_start=$_POST['date_start'];
	$date_end=$_POST['date_end'];
    $location=$_POST['location'];
    $name=$_POST['name'];
    

    $sql1="select * from event where id_event='$id_event'";
	$result=mysqli_query($connect,$sql1);
	if (mysqli_num_rows($result)==0) {

		$sql2="INSERT INTO event (id_event,id_org, name, date_start,date_end,location) VALUES ( '$id_event',$id_org','$name', '$date_start','$date_end', '$location);";
		mysqli_query($connect,$sql2);
		header("Location: ../collab2.php");exit();
		echo "<div class='alert alert-success alertcenter2 alertcenter1'>
			 <strong>Success!</strong>Inserted</div>";
 }

else {
	header("Location: ../collab2.php");exit();
echo "<div class='alert alert-danger alertcenter2 alertcenter1'>
	 <strong>ereur!</strong>The username  is already taken !! Try a different username.</div>";


}

}

?>