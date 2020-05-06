<?php
class User{
    private $username;
    private $name;
    private $email;
    private $password;
    private $adress;
    private $phone;
    private $role;
    public function __construct($username, $name, $password, $email, $adress, $phone, $role){
        $this->username = $username;
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->adress = $adress;
        $this->phone = $phone;
        $this->role = $role;
    }
    function getUsername(){
        return $this->username;
    }

    function getName(){
        return $this->name;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getAdress(){
        return $this->adress;
    }
    function getPhone(){
        return $this->phone;
    }
    function getRole(){
        return $this->role;
    }

}
?>