<?php 
   
  $host = "localhost";
  $user = "root";
  $password = "";
  $db = "sspms_db";

 // session_start();
  $con = mysqli_connect($host, $user, $password, $db);
  
  if($con === false){
      die("connection error");
  }

  if($_SERVER['REQUEST_METHOD'] == "POST"){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $sql = "SELECT * FROM users WHERE email='".$email."' AND password = '".$password."'";
      $result =mysqli_query($con,$sql);

      $row = mysqli_fetch_array($result);

      if($row['userType'] == 1){
        //$_SESSION['email'] = $email;
        header("location: admin/dashboard/index.php"); 
      }
      elseif($row['userType'] == 0){
        //$_SESSION['email'] = $email;
        header("location: index.php"); 
      }else{
          echo "email or password incorrect"; 
      }
  }
?>
<?php include ("includes/header.php"); ?>
<section id="login-form">
      <div class="row m-0">
         <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark animate__animated animate__heartBeat">Login </h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Enjoy Features </p>
                    <span class="font-ubuntu text-black-50"> Don't have an account? <a href="signup.php">Sign Up</a></span>
                 </div>
                  <div class="d-flex justify-content-center">
                      <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">
                       <div class="row my-4">
                           <div class="col">
                               <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required>
                           </div>
                       </div> 
                       <div class="row my-4">
                           <div class="col input-group">
                               <input type="password"  name="password" id="password" class="form-control" placeholder="Password*" required>
                               <span class="input-group-addon"><i class="bi bi-eye-slash icon" id="togglePassword"></i></span>
                              </div>
                       </div> 
                       <div class="row">
                           <div class="col">
                              <a href="#" >Forgotten Password?</a>    </div>
                       </div> 
                       
                       <div class="submit-btn text-center my-5">
                           <button type="submit" class="btn btn-primary rounded-pill  px-5">Log In</button>
                       </div>
                    </form>
                  </div>
         </div>
      </div>
    </section> 

<?php include ("includes/footer.php"); ?>