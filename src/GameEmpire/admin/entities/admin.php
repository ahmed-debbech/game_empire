<?PHP
class admin{
	private $id;
    private $mdp;
    private $photo;
    private $role;
	

	
	function __construct($id,$mdp,$photo,$role){
		$this->id=$id;
        $this->mdp=$mdp;
        $this->photo=$photo;
        $this->role=$role;
	   

	}
	
	function getId(){
		return $this->id;
	}
	function getPass(){
		return $this->mdp;
	}
	function getRole(){
		return $this->role;
    }
    function getPhoto(){
		return $this->photo;
	}
    
    
	function setId($id){
		$this->id=id;
	}
	function setPass($mdp){
		$this->mdp=mdp;
	}
	function setRole($role){
		$this->role=role;
	}
	function setPhoto($photo){
		$this->photo=photo;
	}
	
	
	
}

?>