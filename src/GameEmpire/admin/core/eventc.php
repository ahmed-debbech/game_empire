<?PHP
require "config.php";
class eventc {
function showEvent ($event){
		echo "Id event: ".$event->getIdEvent()."<br>";
		echo "Id org: ".$event->getIdOrg()."<br>";
		echo "Pic: ".$event->getPic()."<br>";
		echo "Name: ".$event->getName()."<br>";
		echo "Type: ".$event->getType()."<br>";
		echo "date_start: ".$event->getStart()."<br>";
		echo "date_end: ".$event->getEnd()."<br>";
		echo "Place: ".$event->getLoc()."<br>";
		echo "Description: ".$event->getDesc()."<br>";
		echo "Video: ".$event->getVid()."<br>";
		
	}
	
	function addEvent($event)
{   
	$id_event=$event->getIdEvent();
	$id_org=$event->getIdOrg();
	$pic=$event->getPic();
	$namee=$event->getName();
	$typee=$event->getType();
	$date_start=$event->getStart();
	$date_end=$event->getEnd();
	$location=$event->getLoc();
	$detail=$event->getDesc();
	$video=$event->getVid();
	
	$sql="INSERT INTO event (id_event,id_org,pic,namee,typee,date_start,date_end,location,detail,video) values ('$id_event','$id_org','$pic','$namee','$typee','$date_start','$date_end','$location','$detail','$video')";
	$db = config::getConnexion();
	try{
	$req=$db->prepare($sql);

		$req->execute();
	   
	}
	catch (Exception $e){
		echo 'Erreur: '.$e->getMessage();
	}


}
	function showEvents(){
		
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function deleteEvent($id_event){
		$sql="DELETE FROM event where id_event= :id_event";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_event',$id_event);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function editEvent($event,$id_event){
		$sql="UPDATE event SET id_event=:id_event1,id_org=:id_org,pic=:pic,namee=:namee,typee=:typee,date_start=:date_start,date_end=:date_end,location=:location,detail=:detail,video=:video WHERE id_event=:id_event";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_event1=$event->getIdEvent();
		$id_org=$event->getIdOrg();
		$pic=$event->getPic();
		$namee=$event->getName();
		$typee=$event->getType();
		$date_start=$event->getStart();
		$date_end=$event->getEnd();
		$location=$event->getlocation();
		$detail=$event->getDesc();
		$video=$event->getVid();
		
		$datas = array(':id_event1'=>$id_event1,':id_event'=>$id_event, ':id_org'=>$id_org, ':namee'=>$namee,':typee'=>$typee,':date_start'=>$date_start,':date_end'=>$date_end,':location'=>location,':detail'=>detail,':video'=>video);
		$req->bindValue(':id_org1',$id_org1);
		$req->bindValue(':id_org',$id_org);
		$req->bindValue(':pic',$pic);
		$req->bindValue(':namee',$namee);
		$req->bindValue(':typee',$typee);
		$req->bindValue(':date_start',$date_start);
		$req->bindValue(':date_end',$date_end);
		$req->bindValue(':location',$location);
		$req->bindValue(':detail',$detail);
		$req->bindValue(':video',$video);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " the datas : " ;
  print_r($datas);
        }
		
	}
	function backupEvent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function searchEvent($id_event){
		$sql="SELECT * from event where id_event=$id_event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function sortEvents(){
		
		$sql="SELECT * From event order by namee";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
		
	


}	



?>