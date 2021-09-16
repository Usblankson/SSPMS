<?php 
    include_once "header.php";

    @$userType = $_SESSION['userType'];
    @$email = $_SESSION['email'];
    

   
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "sspms_db";

  $con = mysqli_connect($host, $user, $password, $db);
  
  if($con === false){
      die("connection error");
  }
 
  if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $sql = "SELECT * FROM users WHERE email='".$email."' AND password = '".$password."'";
      $result = mysqli_query($con,$sql);
      if ($result) {
        while ($row = mysqli_fetch_array($result)) {
          $_SESSION['userType'] = $row['userType'];
          $_SESSION['email'] = $row['email'];
          
            if($_SESSION['userType'] == "1"){
              // $_SESSION['email'] = $email;
              header("location: home.php"); 
            } elseif($_SESSION['userType'] == "0"){
              // $_SESSION['email'] = $email;
              header("location: ../index.php"); 
            } else{
                echo "email or password incorrect"; 
            }
      }        
      }


  }


?>