<?php
function islogin(){
  if(isset($_COOKIE['PHPSESSID'])){
    session_start();
      if(isset($_SESSION['user_id'])){

      }else{
        header("location:login.php");

      }
  }else{
    header("location:login.php");
  }
}



?>
