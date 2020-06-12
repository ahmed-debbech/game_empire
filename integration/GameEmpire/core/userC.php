<?PHP
include_once $_SERVER['DOCUMENT_ROOT'] . '/GameEmpire/config.php';
class CustomerC {
function display_customer_by_username ($customer){
		echo "first name : ".$customer->getfirstname()."<br>";
		echo "last name : ".$customer->getlastname()."<br>";
		echo "address : ".$customer->getaddress()."<br>";
		echo "company name: ".$customer->getcompanyname()."<br>";
		echo "town : ".$customer->gettown()."<br>";
		echo "email address : ".$customer->getemail()."<br>";
		echo "phone : ".$customer->getphone()."<br>";
		echo "state : ".$customer->getstate()."<br>";
		echo "postcode : ".$customer->getpostcode()."<br>";
		echo "country : ".$customer->getcountry()."<br>";
	}
	
	function new_user($customer){
		$sql="insert into user (username,firstname,lastname,address,companyname,town,email,phone,state,postcode,country,password,role) values (:username,:firstname,:lastname,:address,:companyname,:town,:email,:phone,:state,:postcode,:country,:password,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $username=$customer->getusername();
		$firstname=$customer->getfirstname();
        $lastname=$customer->getlastname();
		$address=$customer->getaddress();
		$companyname=$customer->getcompanyname();
		$town=$customer->gettown();
		$email=$customer->getemail();
		$phone=$customer->getphone();
		$state=$customer->getstate();
		$postcode=$customer->getpostcode();
		$country=$customer->getcountry();
		$password=$customer->getpassword();
		$role=$customer->getrole();
        $req->bindValue(':username',$username);
		$req->bindValue(':firstname',$firstname);
		$req->bindValue(':lastname',$lastname);
		$req->bindValue(':address',$address);
		$req->bindValue(':companyname',$companyname);
		$req->bindValue(':town',$town);
		$req->bindValue(':email',$email);
		$req->bindValue(':phone',$phone);
		$req->bindValue(':state',$state);
		$req->bindValue(':postcode',$postcode);
		$req->bindValue(':country',$country);
		$req->bindValue(':password',$password);
		$req->bindValue(':role',$role);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function display_customer(){
		$sql="SElECT * From user";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }	
	}
	function delete_customer($username){
		$sql="DELETE FROM user where username= :username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
	}
	function modify_customer($ref,$new,$modwhat){
		if ($modwhat=="last name") {
			$sql="UPDATE user SET lastname=:input WHERE email=:ref";
		}
		if ($modwhat=="first name") {
			$sql="UPDATE user SET firstname=:input WHERE email=:ref";

		}
		if ($modwhat=="address") {
			$sql="UPDATE user SET address=:input WHERE email=:ref";
		}
		if ($modwhat=="email") {
			$sql="UPDATE user SET email=:input WHERE email=:ref";
		}
		if ($modwhat=="company") {
			$sql="UPDATE user SET company=:input WHERE email=:ref";
		}

		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':input',$new);
		$req->bindValue(':ref',$ref);

		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
        }
	function get_customer_by_email($email){
		$sql="SELECT * from user where email=$email";
		$db = config::getConnexion();
		try{
		$list=$db->query($sql);
		return $list;
		}
        catch (Exception $e){
            die('Error: '.$e->getMessage());
        }
	}
	
}

?>
