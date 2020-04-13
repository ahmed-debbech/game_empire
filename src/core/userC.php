<?php
include("../config.php");
include_once("../entities/user.php");
class userC{
    public function addUser($user){
        $sql="insert into user (username,name,adress,email,password,role,phone) values (:username,:name,:adress,:email,:password,:role,:phone)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $username = $user->getUsername();
        $name = $user->getName();
        $pass = $user->getPassword();
        $email = $user->getEmail();
        $role = $user->getRole();
        $phone = $user->getPhone();
        $adress = $user->getAdress();

        $req->bindValue(':username',$username);
        $req->bindValue(':name',$name);
        $req->bindValue(':phone',$phone);
        $req->bindValue(':adress',$adress);
        $req->bindValue(':email',$email);
        $req->bindValue(':password',$pass);
        $req->bindValue(':role',$role);

            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
}
?>