<?php 
   
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "sspms_db";

 //session_start();
  $con = mysqli_connect($host, $user, $password, $db);
  
  if($con === false){
      die("connection error");
  }
