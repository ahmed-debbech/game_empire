<h1>Notifications</h1>

<?php
    
    include("functionsnotif.php");

    $id_notif = $_GET['id_notif'];

    $query ="UPDATE `notification` SET `status` = 'read' WHERE `id_notif` = $id_notif;";
    performQuery($query);

    $query = "SELECT * from `notification` where `id_notif` = '$id_notif';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
            if($i['type']=='like'){
                echo ucfirst($i['username'])." liked your post. <br/>".$i['date'];
            }else{
                echo "Some commented on your post.<br/>".$i['message'];
            }
        }
    }
    
?><br/>
<a href="index1.php">Back</a>