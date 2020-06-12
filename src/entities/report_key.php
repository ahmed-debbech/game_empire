<?php
//entities
class reportKey {
    private $id;
    private $username;
    private $date;
    private $text;
    private $key_code;
function __construct($id,$username,$date,$text,$key_code){
    $this->id=$id;
    $this->username=$username;
    $this->date=$date;
    $this->text=$text;
    $this->key_code=$key_code;
}
function getKeyCode(){
    return $this->key_code;
}
function setKeyCode($key_code){
    $this->key_code=$key_code;
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
function setUsername($username){
    $this->username=$username;
}
function setDate($date){
    $this->date;
}
function setText($text){
    $this->text=$text;
}
}
?>
