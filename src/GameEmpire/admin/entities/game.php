<?PHP
class Game{
	private $id_game;
	private $name;
	private $id_plat;
	private $release_date;
	private $category;
	private $price;
	private $solde;
	private $score;
	private $trailer;
	function __construct($id_game,$name,$id_plat,$release_date,$category,$price,$solde,$score,$trailer){
		$this->id_game=$id_game;
		$this->name=$name;
		$this->id_plat=$id_plat;
		$this->release_date=$release_date;
		$this->category=$category;
		$this->price=$price;
		$this->solde=$solde;
		$this->score=$score;
		$this->trailer=$trailer;

	}
	
	function getId_game(){
		return $this->id_game;
	}
	function getName(){
		return $this->name;
	}
	function getId_plat(){
		return $this->id_plat;
	}
	function getRelease_date(){
		return $this->release_date;
	}
	function getCategory(){
		return $this->category;
	}
	function getPrice(){
		return $this->price;
	}
	function getSolde(){
		return $this->solde;
	}
	function getScore(){
		return $this->score;
	}
	function getTrailer(){
		return $this->trailer;
	}


	function setId_game($id_game){
		$this->id_game=$id_game;
	}
	function setName($name){
		$this->name=$name;
	}
	function setId_plat($id_plat){
		$this->id_plat=$id_plat;
	}
	function setRelease_date($release_date){
		$this->release_date=$release_date;
	}
	function setCategory($category){
		$this->category=$category;
	}
	function setPrice($price){
		$this->price=$price;
	}
	function setSolde($solde){
		$this->solde=$solde;
	}
	function setScore($score){
		$this->score=$score;
	}
	function setTrailer($trailer){
		$this->trailer=$trailer;
	}

	
}

?>