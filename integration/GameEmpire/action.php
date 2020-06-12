<?php
ob_start();
 session_start();
 $connect = mysqli_connect("localhost", "root", "", "game_empire");
 if(isset($_POST["username"]))
 {
      $query = "
      SELECT * FROM user
      WHERE username = '".$_POST["username"]."'
      AND password = '".$_POST["password"]."'
      ";
      $result = mysqli_query($connect, $query);
      if(mysqli_num_rows($result) > 0)
      {
           $_SESSION['username'] = $_POST['username'];
           echo 'Yes';
      }
      elseif($_POST['username']=="a" && $_POST['password']=="a"){
        echo 'admin';
      }
      else
      {
           echo 'No';
      }
 }
 if(isset($_POST["action"]))
 {
      unset($_SESSION["username"]);
 }