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


    $query = "SELECT * FROM organizator";

	$result=mysqli_query($connect,$query);
	
	if (isset($_POST['add'])) 
    {

    $id_org=$_POST['id_org'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $name=$_POST['name'];
    

    $sql1="select * from organizator where id_org='$id_org'";
	$result=mysqli_query($connect,$sql1);
	if (mysqli_num_rows($result)==0) {

		$sql2="INSERT INTO organizator (id_org, name, email, phone) VALUES ( '$id_org','$name', '$email', '$phone');";
		mysqli_query($connect,$sql2);
		header("Location: ../collab.php");exit();
		echo "<div class='alert alert-success alertcenter2 alertcenter1'>
			 <strong>Success!</strong>Inserted</div>";
 }

else {
	header("Location: ../collab.php");exit();
echo "<div class='alert alert-danger alertcenter2 alertcenter1'>
	 <strong>ereur!</strong>The username  is already taken !! Try a different username.</div>";


}

}

?>