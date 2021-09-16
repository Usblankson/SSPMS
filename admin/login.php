<?php 
 session_start();
 include_once("conn.php");
 $conn = $pdo->open();
  if(isset($_POST['login'])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $sql = $conn->prepare("SELECT * FROM users WHERE email =:email AND password = :password");
      $sql->execute(['email'=>$email, 'password'=>$password]);
      if ($sql->rowCount() > 0) {
        foreach($sql as $row){
          if($row['userType'] == 1){
            $_SESSION['email'] = $email;
            header("location: home.php");
          } else{

          }
        }     
      }


  }


?>