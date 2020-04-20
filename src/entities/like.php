<?php
class Like{
    private $id_like;
    private $id_rev;
    private $username;
    public function __construct($id_like, $id_rev, $username){
        $this->id_like = $id_like;
        $this->id_rev = $id_rev;
        $this->username = $username;
    }
    public function getIdLike(){
        return $this->id_like;
    }
    public function getIdRev(){
        return $this->id_rev;
    }
    public function getUsername(){
        return $this->username;
    }
}
?>