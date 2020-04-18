<?PHP
class organiz{
	private $id_org;
	private $name;
	private $email;
	private $phone;
	
	function __construct($id_org,$name,$email,$phone){
		$this->id_org=$id_org;
		$this->name=$name;
		$this->email=$email;
		$this->phone=$phone;

	}
	
	function getIdOrg(){
		return $this->id_org;
	}
	function getName(){
		return $this->name;
	}
	function getEmail(){
		return $this->email;
	}
	function getPhone(){
		return $this->phone;
	}
	

	function setIdOrg($id_org){
		$this->id_org=id_org;
	}
	function setName($name){
		$this->name=name;
	}
	function setEmail($email){
		$this->email=email;
	}
	function setPhone($phone){
		$this->phone=phone;
	}
	
}

?>