<?PHP
class organiz{
	private $id_org;
	private $img;
	private $name;
	private $email;
	private $phone;
	
	function __construct($id_org,$img,$name,$email,$phone){
		$this->id_org=$id_org;
		$this->img=$img;
		$this->name=$name;
		$this->email=$email;
		$this->phone=$phone;

	}
	
	function getIdOrg(){
		return $this->id_org;
	}
	function getImg(){
		return $this->img;
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
	function setImg($img){
		$this->img=img;
	}
	function setEmail($email){
		$this->email=email;
	}
	function setPhone($phone){
		$this->phone=phone;
	}
	
}

?>