<?php
include("../../../../../config.php");
function retrive(){
    $db = config::getConnexion();
    $sql = "select * from keyy";
    try{
        $list = $db->query($sql);
    }catch(Exception $e){
        echo "error";
    }
    $res = array();
        foreach($list as $row){
                array_push($res, $row);
        }
        return $res;
}
$j=0;
$list = retrive();
for($i=sizeof($list)-1; $i>=0; $i--){
    echo '<tr>
                                        <td><a href="#" class="btn-link">'.  $list[$i]["key_code"].'</a></td>
                                        <td><a href="#" class="btn-link">'.  $list[$i]["username"].'</a></td>
                                        <td>'.$list[$i]["id_game"].'</td>
                                        <td>'.  $list[$i]["date"].'</td>
                                        <td>'.$list[$i]["valid"].'</td>
                                    </tr>';
    $j++;
}
?>