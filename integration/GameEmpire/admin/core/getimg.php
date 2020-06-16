<?php
$con = mysqli_connect("127.0.0.1", "root", "", "game_empire");
$sql1="select * from admin where id='".$_SESSION["id"]."'";
if($result = mysqli_query($con, $sql1)){
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo $row["photo"];
}
?>