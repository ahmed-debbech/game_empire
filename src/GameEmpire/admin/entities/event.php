<?PHP
class event{
	private $id_event;
	private $id_org;
	private $pic;
	private $namee;
	private $typee;
	private $date_start;
	private $date_end;
	private $location;
	private $detail;
	private $video;

	
	function __construct($id_event,$id_org,$pic,$namee,$typee,$date_start,$date_end,$location,$detail,$video){
		$this->id_event=$id_event;
		$this->id_org=$id_org;
	    $this->pic=$pic;
		$this->namee=$namee;
		$this->typee=$typee;
		$this->date_start=$date_start;
		$this->date_end=$date_end;
		$this->location=$location;
		$this->detail=$detail;
		$this->video=$video;

	}
	
	function getIdOrg(){
		return $this->id_org;
	}
	function getName(){
		return $this->namee;
	}
	function getType(){
		return $this->typee;
	}
	function getPic(){
		return $this->pic;
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
	function getDesc(){
		return $this->detail;
	}
	function getVid(){
		return $this->video;
	}

	function setIdOrg($id_org){
		$this->id_org=id_org;
	}
	function setName($namee){
		$this->namee=namee;
	}
	function setType($typee){
		$this->typee=typee;
	}
	function setPic($pic){
		$this->pic=pic;
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
	function setDesc($detail){
		$this->detail=detail;
	}
	function setVid($video){
		$this->video=video;
	}
	
}

?>