<?php
//entities
class Report {
    private $id;
    private $username;
    private $date;
    private $text;
    private $topic;
    function __construct($id,$username,$date,$text,$topic){
		$this->id=$id;
		$this->username=$username;
		$this->date=$date;
		$this->text=$text;
		$this->topic=$topic;
}
function getId(){
    return $this->id;
}
function getUsername(){
    return $this->username;
}
function getDate(){
    return $this->date;
}
function getText(){
    return $this->text;
}
function getTopic(){
    return $this->topic;
}

function setUsername($username){
    $this->username=$username;
}
function setDate($date){
    $this->date;
}
function setText($text){
    $this->text=$text;
}
function setTopic($topic){
    $this->topic=$topic;
}

}

?>
