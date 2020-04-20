<?php
include("../config.php");
class likeC{
    private function isUnique($id){
        $sql = "select * from like";
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
    public function addLike($like){
        $id_like = 0;
        //do{
            $id_like = rand(100,99999);
        //}while(!$this->isUnique($id_like));
        echo $like->getUsername();
        $sql="insert into like (id_like,username,id_rev) values (:id_like,:username,:id_rev)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':username', $like->getUsername());
            $req->bindValue(':id_rev',$like->getIdRev());
            $req->bindValue(':id_like',$id_like);
            $yo = $req->execute();
            var_dump($yo);
        }catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }   
    }
}
?>