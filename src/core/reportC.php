<?PHP
session_start();
//core
include "../config.php";
class ReportC {
function afficherReport($report){
		echo "Id: ".$report->getId()."<br>";
		echo "Username: ".$report->getUsername()."<br>";
		echo "Date: ".$report->getDate()."<br>";
		echo "Text: ".$report->getText()."<br>";
		echo "Topic: ".$report->getTopic()."<br>";
    }
    
function ajouterReport($report){
    $sql="insert into report (id_rep,username,date,text,topic) values (:id,:username,curdate(),:text,:topic)";
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
            echo "wriong";
        }
    }

    catch(Exception $e){
        echo'Error :'.$e->getMessage();
    }
}
}

?>