<?php
include("../config.php");
class likeC{
    private function isUnique($id){
        $sql = "select * from react";
        $db = config::getConnexion();
        try{
            $list = $db->query($sql);
        }catch(Exception $e){
            return false;
        }
        foreach($list as $row){
            if($row["id_like"] == $id){
                return false;
            }
        }
        return true;
    }
    public function sendMail($like){
        include_once("send_mail.php");
    }
    public function addLike($like){
        $id_like = 0;
        do{
            $id_like = rand(100,99999);
        }while(!$this->isUnique($id_like));
        $sql="insert into react (id_like,username,date,id_rev,type) values (:id_like,:username,curdate(),:id_rev,:type)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':username', $like->getUsername());
            $req->bindValue(':id_rev',$like->getIdRev());
            $req->bindValue(':id_like',$id_like);
            $req->bindValue(':type',$like->getType());
            //echo $like->getType();
            $yo = $req->execute();
            var_dump($yo);
        }catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }   
    }
    public function checkExistingReacts($username, $id_rev){
        $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
        $sql1="select * from react where id_rev='".$id_rev."' and username='".$username."'";
        if($result = mysqli_query($con, $sql1)){
            if(mysqli_num_rows($result) > 0){
                return false;
            }
        }
        return true;
    }
    public function changeReact($like, $id_rev, $username){
        $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
        $sql1="delete from react where id_rev='".$id_rev."' and username='".$username."'";
        if($result = mysqli_query($con, $sql1)){
           $this->addLike($like);
        }
    }
}
?>