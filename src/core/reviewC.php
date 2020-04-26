<?php
ob_start();

class reviewC{
    private function isUnique($id){
        $sql = "select * from reviews";
        $db = config::getConnexion();
        try{
            $list = $db->query($sql);
        }catch(Exception $e){
            return false;
        }
        foreach($list as $row){
            if($row["id_rev"] == $id){
                return false;
            }
        }
        return true;
    }
    public function addReview($rev){
        $id_rev = 0;
        do{
            $id_rev = rand(100,99999);
        }while(!$this->isUnique($id_rev));
        $sql="insert into reviews (id_rev,username,nb_stars,content,date,title,id_game) values (:id_rev,:username,:nb_stars,:content,curdate(),:title,:id_game)";
        $db = config::getConnexion();
        //$db->query($sql);
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':username',$rev->getUsername());
            $req->bindValue(':id_rev',$id_rev);
            $req->bindValue(':nb_stars',$rev->getNbStars());
            $req->bindValue(':content',$rev->getContent());
            $req->bindValue(':title',$rev->getTitle());
            $req->bindValue(':id_game',$rev->getIdGame());

            $yo = $req->execute();
            var_dump($yo);
        }
        catch (Exception $e){
            echo 'Error: '.$e->getMessage();
        }
    }
    public function getReviews($id_game){
        $db = config::getConnexion();
        $sql = "select * from reviews";
        try{
            $list = $db->query($sql);
        }catch(Exception $e){
            echo "error";
        }
        $res = array();
        foreach($list as $row){
            if($row["id_game"] == $id_game){
                array_push($res, $row);
            }
        }
        return $res;
    }
    public function countReviews($id_game){
        $link = mysqli_connect("127.0.0.1", "root", "", "game_empire");
        $sql = "select * from reviews where id_game='".$id_game."'";
        $m =0;
            $res = mysqli_query($link,$sql, $m); 
            $num= mysqli_num_rows($res);

        return $num;
    }
}
?>