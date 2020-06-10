<?php

class platform
{
	private $name;
	private $id_plat;
	
	
	


public function __construct($name,$id_plat)
{

$this->name=$name;
$this->id_plat=$id_plat;







}
public function getname(){return $this->name;}
public function getid_plat(){return $this->id_plat;}



}


  ?>