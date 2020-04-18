<?PHP
require "config.php";
class organizc {
function showOrganiz ($organiz){
		echo "Id Organiz: ".$organiz->getIdOrg()."<br>";
		echo "Name: ".$organiz->getName()."<br>";
		echo "Email: ".$organiz->getEmail()."<br>";
		echo "Phone: ".$organiz->getPhone()."<br>";
		
	}
	
	function addOrganiz()
{
	$id_org=$organiz->getIdOrg();
	$name=$organiz->getName();
	$email=$organiz->getEmail();
	$phone=$organiz->getPhone();
	
	$sql="INSERT INTO organizator (id_org,name,email,phone) values ('$id_org','$name','$email','$phone')";
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
		$sql="UPDATE organizator SET id_org=:id_org1, name=:name,email=:email,phone=:phone WHERE id_org=:id_org";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_org1=$organiz->getIdOrg();
        $name=$organiz->getName();
        $email=$organiz->getEmail();
		$phone=$organiz->getPhone();
		
		$datas = array(':id_org1'=>$id_org1, ':id_org'=>$id_org, ':name'=>$name,':email'=>$email,':phone'=>phone);
		$req->bindValue(':id_org1',$id_org1);
		$req->bindValue(':id_org',$id_org);
		$req->bindValue(':name',$name);
		$req->bindValue(':email',$email);
		$req->bindValue(':phone',$phone);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " the datas : " ;
  print_r($datas);
        }
		
	}
	/*function backupOrganiz($id_org){
		$sql="SELECT * from organizator where id_org=$id_org";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
}

?>