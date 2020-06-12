<?php
class Like{
    private $id_like;
    private $id_rev;
    private $username;
    private $type;
    public function __construct($id_like, $id_rev, $username,$type){
        $this->id_like = $id_like;
        $this->id_rev = $id_rev;
        $this->username = $username;
        $this->type= $type;
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
    public function getType(){
        return $this->type;
    }
}
?>