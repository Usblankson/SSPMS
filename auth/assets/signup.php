<?php include_once 'header.php';?>
<section id="register">
      <div class="row m-0">
         <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark animate__animated animate__heartBeat">Create account</h1>
                    <p class="p-1 m-0 font-ubuntu text-black-50">Sign Up <br> It's quick and easy </p>
                    <span class="font-ubuntu text-black-50"> Already have an account? <a href="login.php">Login</a></span>
                 </div>
                  <div class="upload-profile-image d-flex justify-content-center pb-5">
                      <div class="text-center">
                          <div class="d-flex justify-content-center">
                          <img class="camera-icon" src="assets/img/camera-icon.svg" alt="camera icon">
                          </div>
                          <img src="./assets/img/profile/beard.png" style=" width: 200px; height: 200px;" class="img rounded" alt="profile">
                          <small class="font-ubuntu text-black-50">Choose Image</small>
                          <input type="file" form="reg-form" class="form-control-file" name="profileUpload" id="upload-profile"> 
                        </div>
                        
                  </div>
                  <div class="d-flex justify-content-center">
                      <form action="signup.php" method="post" enctype="multipart/form-data" id="reg-form">
                       <div class="row">
                           <div class="col">
                               <input type="text"  value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name*" required>
                           </div>
                           <div class="col">
                               <input type="text" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>" name="lastName" id="lastName" class="form-control" placeholder="Last Name*" required>
                           </div>
                       </div> 
                       <div class="row my-4">
                           <div class="col">
                               <input type="email"  value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"name="email" id="email" class="form-control" placeholder="Email*" required>
                           </div>
                       </div> 
                       <div class="row my-4">
                           <div class="col">
                               <input type="password"  name="password" id="password" class="form-control" placeholder="Password*" required>
                           </div>
                       </div> 
                       <div class="row my-4">
                           <div class="col">
                               <input type="password"  name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password*" required>
                                <small id="confirm_error" class="text-danger"> </small>
                            </div>
                       </div> 
                       <div class="form-check form-check-inline">
                           <input type="checkbox" name="agreement" class="form-chec-input" required>
                           <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#" >Terms, conditions and policies</a> &nbsp;* </label>
                       </div>

                       <div class="submit-btn text-center my-5">
                           <button type="submit" class="btn btn-primary rounded-pill text-light px-5">Continue</button>
                       </div>
                    </form>
                  </div>
         </div>
      </div>
    </section> 
<?php include_once 'footer.php'; ?>