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
    private function checkfForBadWords($rev){
        $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
        $words = array();
        $cont = $rev->getContent();
        $word = "";
        $new = "";
        $wordStart = true;
        $i=0;
        do{
            while($cont[$i] != ' ' && strlen($cont) >= $i){
                $word .= $cont[$i];
                $i++;
            }
            if($word != ""){
                $sql1="select * from bad_words where word='".$word."'";
                if($result = mysqli_query($con, $sql1)){
                    if(mysqli_num_rows($result) > 0){
                        $sz = strlen($word);
                        $word = "";
                        for($j=0; $j<=$sz-1; $j++){
                            $word .= "*";
                        }
                    }
                }
                $new .= $word;
                $word = "";
                $new .= $cont[$i];
            }else{
                $new .= $cont[$i];
            }
            $i++;
        }while(strlen($cont) >= $i);
        return $new;
    }
    public function addReview($rev){
        $id_rev = 0;
        do{
            $id_rev = rand(100,99999);
        }while(!$this->isUnique($id_rev));
        //check for bad words in review
        $rev->setContent($this->checkfForBadWords($rev));

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
    public function getReviewsSorted($id_game, $mode){
        $db = config::getConnexion();
        $sql = "select * from reviews where id_game='".$id_game."' order by ".$mode." ASC;";
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