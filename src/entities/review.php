<?php
class Review{
    private $id_rev;
    private $username;
    private $nb_stars;
    private $content;
    private $date;
    private $title;
    private $id_game;
    public function __construct($id, $username, $nbstars, $content, $date, $title, $id_game){
        $this->id_rev = $id;
        $this->username = $username;
        $this->nb_stars = $nbstars;
        $this->content = $content;
        $this->date =$date;
        $this->title = $title;
        $this->id_game =$id_game;
    }
    public function getId(){
        return $this->id_rev;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getNbStars(){
        return $this->nb_stars;
    }
    public function getContent(){
        return $this->content;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function getDate(){
        return $this->date;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getIdGame(){
        return $this->id_game;
    }
}
?>