<?php
class order
{
      private $order_id;
      private $username;
      private $created_date;
      private $modified_date;
      private $order_quantity;
      private $order_total;
      private $order_note;
      private $status;
      private $delivery_status;

  function __construct($order_id,$username,$order_quantity,$order_total,$order_note)
  {
    $this->order_id= $order_id;
    $this->username= $username;
    $this->order_quantity = $order_quantity;
    $this->order_total = $order_total;
    $this->order_note = $order_note;
  }
  function get_order_id (){return $this->order_id;}
  function get_username (){return $this->username;}
  function get_created_date (){return $this->created_date;}
  function get_modified_date (){return $this->modified_date;}
  function get_order_quantity (){return $this->order_quantity;}
  function get_order_total (){return $this->order_total;}
  function get_order_note (){return $this->order_note;}
  function get_status (){return $this->status;}
  function get_delivery_status (){return $this->delivery_status;}


  function set_order_id($order_id){
    $this->order_id=$order_id;
  }
  function set_username($username){
    $this->username=$username;
  }
  function set_created_date($created_date){
    $this->created_date=$created_date;
  }
  function set_modified_date($modified_date){
    $this->modified_date=$modified_date;
  }
  function set_order_quantity($order_quantity){
    $this->order_quantity=$order_quantity;
  }
  function set_order_total($order_total){
    $this->order_total=$order_total;
  }
  function set_order_note($order_note){
    $this->order_note=$order_note;
  }
  function set_status($status){
    $this->status=$status;
  }
  function set_delivery_status($delivery_status){
    $this->delivery_status=$delivery_status;
  }
}
?>