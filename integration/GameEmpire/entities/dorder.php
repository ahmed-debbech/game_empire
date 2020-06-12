<?php
class dorder
{
    private $invoice_no;
    private $game_name;
    private $game_img;
    private $game_price;
    private $game_quantity;
      private $order_id;
      private $created_date;
      private $order_quantity;
      private $order_total;
      private $first_name;
      private $last_name;
      private $company;
      private $address;
      private $phone;
      private $email;
      private $postcode;
      private $town;
      private $state;
      private $country;
      private $status;
      private $delivery_status;

  function __construct($invoice_no,$game_name,$game_img,$game_price,$game_quantity,$order_id,$order_quantity,$order_total,$first_name,$last_name,$email,$company,$address,$phone,$postcode,$town,$state,$country,$status)
  {
    $this->invoice_no= $invoice_no;
    $this->game_name= $game_name;
    $this->game_img= $game_img;
    $this->game_price= $game_price;
    $this->game_quantity= $game_quantity;
    $this->order_id= $order_id;
    $this->order_quantity = $order_quantity;
    $this->order_total = $order_total;
    $this->first_name=$first_name;
    $this->last_name=$last_name;
    $this->company=$company;
    $this->address=$address;
    $this->phone=$phone;
    $this->town=$town;
	$this->state=$state;
	$this->postcode=$postcode;
    $this->country=$country;
    $this->status=$status;
    //$this->delivery_status=$delivery_status;	
    $this->email=$email;
  }
  function get_invoice_no (){return $this->invoice_no;}
  function get_game_name (){return $this->game_name;}
  function get_game_img (){return $this->game_img;}
  function get_game_price (){return $this->game_price;}
  function get_game_quantity (){return $this->game_quantity;}
  function get_order_id (){return $this->order_id;}
  function get_order_quantity (){return $this->order_quantity;}
  function get_order_total (){return $this->order_total;}
  function get_created_date (){return $this->created_date;}
  //function get_modified_date (){return $this->modified_date;}
  function get_status (){return $this->status;}
  function get_delivery_status (){return $this->delivery_status;}
  function get_first_name (){return $this->first_name;}
  function get_last_name (){return $this->last_name;}
  function get_company (){return $this->company;}
  function get_address (){return $this->address;}
  function get_phone (){return $this->phone;}
  function get_town (){return $this->town;}
  function get_state (){return $this->state;}
  function get_postcode (){return $this->postcode;}
  function get_country (){return $this->country;}
  function get_email (){return $this->email;}

function set_invoice_no($invoice_no) {$this->invoice_no=$invoice_no;}
function set_game_name($game_name) {$this->game_name=$game_name;}
function set_game_img($game_img) {$this->game_img=$game_img;}
function set_game_price($game_price) {$this->game_price=$game_price;}
function set_game_quantity($game_quantity) {$this->game_quantity=$game_quantity;}
function set_order_id($order_id) {$this->order_id=$order_id;}
function set_order_quantity($order_quantity){$this->order_quantity=$order_quantity;}
function set_order_total($order_total){$this->order_total=$order_total;}
function set_created_date($created_date){$this->created_date=$created_date;}
//function set_modified_date($modified_date){$this->modified_date=$modified_date;}
function set_status($status){$this->status=$status;}
function set_delivery_status($delivery_status){$this->delivery_status=$delivery_status;}
function set_first_name($first_name){$this->first_name=$first_name;}
function set_last_name($last_name){$this->last_name=$last_name;}
function set_address($address){$this->address=$address;}
function set_company($company){$this->company=$company;}
function set_town($town){$this->town=$town;}
function set_phone($phone){$this->phone=$phone;}
function set_state($state){$this->state=$state;}
function set_postcode($postcode){$this->postcode=$postcode;}
function set_country($country){$this->country=$country;}
function set_email($email){$this->email=$email;}
}
?>