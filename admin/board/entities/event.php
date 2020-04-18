<?PHP
class event{
	private $id_event;
	private $id_org;
	private $name;
	private $date_start;
	private $date_end;
	private $location;

	
	function __construct($id_event,$id_org,$name,$date_start,$date_end,$location){
		$this->id_event=$id_event;
		$this->id_org=$id_org;
		$this->name=$name;
		$this->date_start=$date_start;
		$this->date_end=$date_end;
		$this->location=$location;

	}
	
	function getIdOrg(){
		return $this->id_org;
	}
	function getName(){
		return $this->name;
	}
	function getIdEvent(){
		return $this->id_event;
	}
	function getStart(){
		return $this->date_start;
	}function getEnd(){
		return $this->date_end;
	}
	function getLoc(){
		return $this->location;
	}
	
	

	function setIdOrg($id_org){
		$this->id_org=id_org;
	}
	function setName($name){
		$this->name=name;
	}
	
	function setIdEvent($id_event){
		$this->id_event=id_event;
	}
	function setStart($date_start){
		$this->date_start=date_start;
	}
	
	function setEnd($date_end){
		$this->date_end=date_end;
	}
	function setLoc($location){
		$this->location=location;
	}
	
	
}

?>