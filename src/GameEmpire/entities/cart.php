<?php

class cart
{
      private $username;
      private $game_name;
      private $game_img;
      private $price;
      private $quantity;
      

  function __construct($username,$game_name,$game_img,$price)
  {
    $this->username=$username;
    $this->game_name=$game_name;
    $this->game_img=$game_img;
    $this->price=$price;
    
  
  }
  function get_username (){return $this->username;}
  function get_game_name (){return $this->game_name;}
  function get_game_img (){return $this->game_img;}
  function get_price (){return $this->price;}
  function get_quantity (){return $this->quantity;}
 


  function set_reference($username){
    $this->username=$username;
  }
  function set_game_name($game_name){
    $this->game_name=$game_name;
  }
  function set_price($price){
    $this->price=$price;
  }

   function set_quantity($quantity){
    $this->quantity=$quantity;
  }
  function set_game_img($game_img){
    $this->game_img=$game_img;
  }
}
?>