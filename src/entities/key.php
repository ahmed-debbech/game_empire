<?php
//entities
class Key {
    private $code;
    private $username;
    private $idGame;
    private $date;
   
    function __construct($code,$username,$idGame,$date){
		$this->code=$code;
		$this->username=$username;
		$this->idGame=$idGame;
		$this->date=$date;
}
function getCode(){
    return $this->code;
}
function getUsername(){
    return $this->username;
}
function getIdGame(){
    return $this->idGame;
}
function getDate(){
    return $this->date;
}


function setUsername($username){
    $this->username=$username;
}
function setIdGame($date){
    $this->idGame;
}
function setDate($text){
    $this->date=$date;
}

}

?>
