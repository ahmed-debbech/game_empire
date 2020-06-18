<?PHP
session_start();
//core
include_once "../config.php";
class ReportC {
function afficherReport($report){
		echo "Id: ".$report->getId()."<br>";
		echo "Username: ".$report->getUsername()."<br>";
		echo "Date: ".$report->getDate()."<br>";
		echo "Text: ".$report->getText()."<br>";
		echo "Topic: ".$report->getTopic()."<br>";
    }
    
function ajouterReportKey($report){
    $sql="insert into report (id_rep,username,date,text,topic,report_type,key_code) values (:id,:username,curdate(),:text,'',1,:key_code)";
    $db = config::getconnexion();
    $key_code=$report->getKeyCode();

    $sql1="select * from keyy where key_code='".$key_code."'";
         $con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
         $result = mysqli_query($con, $sql1);
         if(mysqli_num_rows($result) == 0){
            return false;
         }
    try{
        $req=$db->prepare($sql);
        $id=$report->getId();
        $username=$report->getUsername();
        $text=$report->getText();
        $key_code=$report->getKeyCode();
        $req->bindvalue(':id',$id);
        $req->bindvalue(':username',$username);
        $req->bindvalue(':text',$text);
        $req->bindvalue(':key_code',$key_code);
        if($req->execute()){
            echo "yoo";
        }else{
            echo "no";
        }
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
    return true;
}
function ajouterReport($report){
    $sql="insert into report (id_rep,username,date,text,topic,report_type,key_code) values (:id,:username,curdate(),:text,:topic,0,0)";
    $db = config::getconnexion();
    try{
        $req=$db->prepare($sql);
        $id=$report->getId();
        $username=$report->getUsername();
        $text=$report->getText();
        $topic=$report->getTopic();
        $req->bindvalue(':id',$id);
        $req->bindvalue(':username',$username);
        $req->bindvalue(':text',$text);
        $req->bindvalue(':topic',$topic);
        if($req->execute()){
            echo "yoo";
        }else{
            echo "no";
        }
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
}
}

?>