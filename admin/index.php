<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSPMS Admin  - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<section id="login-form">
      <div class="row m-0">
         <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark animate__animated animate__heartBeat">Login </h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Enjoy Features
                    <span class="font-ubuntu text-black-50"> Don't have an account? <a href="signup.php">Sign Up</a></span>
                 </div>
                  <div class="d-flex justify-content-center">
                      <form action="login.php" method="POST">
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
                           <button type="submit" name="login" class="btn btn-primary rounded-pill  px-5">Log In</button>
                       </div>
                    </form>
                  </div>
         </div>
      </div>
    </section> 

<!-- <php include ("footer.php"); ?> -->