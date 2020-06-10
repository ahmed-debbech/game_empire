<?PHP
require_once "config.php";
class organizc {
function showOrganiz ($organiz){
		echo "Id Organiz: ".$organiz->getIdOrg()."<br>";
		echo "Image: ".$organiz->getImg()."<br>";
		echo "Name: ".$organiz->getName()."<br>";
		echo "Email: ".$organiz->getEmail()."<br>";
		echo "Phone: ".$organiz->getPhone()."<br>";
		
	}
	
	function addOrganiz()
{
	$id_org=$organiz->getIdOrg();
	$img=$organiz->getImg();
	$name=$organiz->getName();
	$email=$organiz->getEmail();
	$phone=$organiz->getPhone();
	
	$sql="INSERT INTO organizator (id_org,name,email,phone) values ('$id_org','$img','$name','$email','$phone')";
	$db = config::getConnexion();
	try{
	$req=$db->prepare($sql);

		$req->execute();
	   
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}


}
	function showOrganizs(){
		
		$sql="SElECT * From organizator";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function joinOrganizs(){
		
		$sql="SELECT event.id_event,event.namee,event.pic,event.typee,
		event.date_start, event.date_end,event.location,organizator.name,organizator.id_org
		,organizator.img
		FROM event ,organizator
		WHERE  event.id_org=organizator.id_org";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function deleteOrganiz($id_org){
		$sql="DELETE FROM organizator where id_org= :id_org";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_org',$id_org);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function editOrganiz($organiz,$id_org){

		/*$organiz=new organiz($_GET['name'],$_GET['email'],$_GET['phone'],$_GET['id_org']);
		$organizc= new organizc();
		$id_org=$_GET['id_org'];
		$email=$_GET['email'];
		$phone=$_GET['phone'];
		$name=$_GET['name'];*/

		$sql="UPDATE organizator SET id_org=:idd_org,img=:img,name=:name,email=:email,phone=:phone WHERE id_org=:id_org";
	$db = config::getConnexion();
	/*$req=$db->prepare($sql);
	$req->bindValue(':name',$name);
	$req->bindValue(':id_org',$id_org);
	$req->bindValue(':email',$email);
	$req->bindValue(':phone',$phone);*/


	try{
		$req=$db->prepare($sql);

        $name=$organiz->getName();
        $idd_org=$organiz->getIdOrg();
       
		$datas = array(':img'=>$img,':name'=>$name,':email'=>$email,':phone'=>$phone, ':idd_org'=>$idd_org);
		$req->bindValue(':name',$name);
		$req->bindValue(':img',$img);
		$req->bindValue(':email',$email);
		$req->bindValue(':phone',$phone);
		
		$req->bindValue(':idd_org',$idd_org);
		$req->bindValue(':id_org',$id_org);
		
		$req->execute();
	   // header('Location: index.php');
	}
	catch (Exception $e){
		echo " Erreur ! ".$e->getMessage();
echo " the datas : " ;
print_r($datas);
	}
	}

	function backupOrganiz($id_org){
		$sql="SELECT * from organizator where id_org=$id_org";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
}




function sortOrganizs(){
		
	$sql="SELECT * From organizator order by name";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}


}
?>