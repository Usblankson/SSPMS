
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>
<?php //include 'mysqli_connection.php'; ?>

<?php

    require_once("mysqli_connection.php");
    

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['abbr']) 
         || empty($_POST['location']) || empty($_POST['state']) || empty($_POST['tel']) || empty($_POST['funding']) 
         ||/* empty($_POST['schLogo']) || */ empty($_POST['estYear']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $loc = $_POST['location'];
            $state = $_POST['state'];
            $tel = $_POST['tel'];
            $funding = $_POST['funding'];
            $logo = $_POST['logo'];
            $estYear = $_POST['estYear'];
            $abbr = $_POST['abbr'];

            $query = "INSERT into schools (logo,name,abbr,email,location,state,address,tel,funding,estYear) values('$logo','$name','$abbr','$email','$loc','$state','$address','$tel','$funding','$estYear')";
            $result = mysqli_query($con,$query);

            // if($result)
            // {
            //     header("location:viewsch.php");
            // }
            // else
            // {
            //     echo ' Please Check Your Query ';
            // }
        }
    }
    else
    {
        // header("location:viewsch.php");
    }



?>

<!-- ==================== -->

   
<div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="text-primary text-white text-center py-3"> REGISTER SECONDARY SCHOOL</h3>
                        </div>
                        <div class="card-body">

                     <form action="registersch.php" method="post">
                            <div class="row">
                            <!-- <img src="./assets/img/profile/unicross.jpg" style=" width: 200px; height: 200px;" class="img rounded" alt="School logo"> -->
                              <div class="col my-4"><label for="">Upload School LOGO</label>
                                <input type="file" class="form-control-file" placeholder="School Logo" name="logo" id="upload-profile">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">School Name</label>
                                  <input type="text" class="form-control mb-2" placeholder=" School Name " name="name">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4">
                                  <label for="phone">Location</label>
                                  <input type="text" class="form-control mb-2" placeholder=" e.g Ile Ife " name="location">
                                </div>
                                <div class="col-md-3">
                                <label for="">State</label>
                                <select class="form-control" name="state" id="funding">
                                    <option>Abia</option>
                                    <option>Adamawa</option>
                                    <option>Akwa Ibom</option>
                                    <option>Anambra</option>
                                    <option>Bauchi</option>
                                    <option>Bayelsa</option>
                                    <option>Benue</option>
                                    <option>Borno</option>
                                    <option>Cross River</option>
                                    <option>Delta</option>
                                    <option>Ebonyi</option>
                                    <option>Edo</option>
                                    <option>Ekiti</option>
                                    <option>Enugu</option>
                                    <option>Gombe</option>
                                    <option>Imo</option>
                                    <option>Jigawa</option>
                                    <option>Kaduna</option>
                                    <option>Kano</option>
                                    <option>Kastina</option>
                                    <option>Kebbi</option>
                                    <option>Kogi</option>
                                    <option>Kwara</option>
                                    <option>Lagos</option>
                                    <option>Nasarawa</option>
                                    <option>Niger</option>
                                    <option>Ogun</option>
                                    <option>Ondo</option>
                                    <option>Osun</option>
                                    <option>Oyo</option>
                                    <option>Plateau</option>
                                    <option>Rivers</option>
                                    <option>Sokoto</option>
                                    <option>Taraba</option>
                                    <option>Yobe</option>
                                    <option>Zamfara</option>
                                    <option>F.C.T</option>
                                  </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="abbr">School Abbreviation</label>
                                  <input type="text" class="form-control mb-2" placeholder=" School Abbreviation " name="abbr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="address">School Address</label>
                                  <input type="text" class="form-control mb-2" placeholder=" School Address " name="address">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">School Email</label>
                                  <input type="email" class="form-control mb-2" placeholder=" School Email " name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                  <label for="phone">Phone Line</label>
                                  <input type="tel" class="form-control mb-2" placeholder=" +234 " name="tel">
                                </div>
                                <div class="col-md-4">
                                <label for="">Funding</label>
                                <select class="form-control" name="funding" id="funding">
                                    <option>Federal</option>
                                    <option>State</option>
                                    <option>Private</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                 <label for="estYear">Year of establishment</label>
                                <input type="date"  name="estYear" id="est-year" class="form-control form-control-sm" placeholder="est-year*" required>
                                </div>
                            </div>
                                
                                <button class="btn btn-primary btn-block" name="submit">Register</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>   

<!-- ==================== -->

<!-- #registration Area Start 
    <section id="register">
      <div class="row m-0">
         <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                    <h1 class="login-title text-dark">Register School</h1>
                    <!-- <p class="p-1 m-0 font-ubuntu text-black-50">Register Now </p>
                    <span class="font-ubuntu text-black-50"> Already have an account? <a href="login.php">Login</a></span> -->
                 <!-- </div>
                  <div class="upload-profile-image d-flex justify-content-center pb-5">
                        
                  </div>
                  <div class="d-flex justify-content-right container">
                      <form action="registersch.php" method="post" enctype="multipart/form-data" id="reg-form">
                       <div class="row">
                        <div class="col"><label for="">Upload School LOGO</label>
                       <input type="file" class="form-control-file" placeholder="School logo" name="schLogo" id="upload-profile">
                       </div>
                       <div class="row my-3">
                           <div class="col"><label for="">School Name</label>
                               <input type="text" name="schName" id="schName" class="form-control" placeholder="School Name">
                           </div>
                           <div class="col"> <label for="">School Abbr</label> 
                               <input type="text" name="abbr" id="abbr" class="form-control" placeholder="School abbr">
                           </div>
                        </div> 
                        <div class="row">
                           <div class="col-md-6"><label for="">Est date</label> 
                               <input type="date"  name="estYear" id="est-year" class="form-control form-control-sm" placeholder="est-year*" required>
                           </div>
                           <div class="col-md-6"> <label for="">Funding</label> 
                           <select class="form-control" name="funding" id="funding">
                                    <option>Federal</option>
                                    <option>State</option>
                                    <option>Private</option>
                           </select>
                           </div>
                       </div>  
                        <div class="row my-3">  
                           <div class="col"> <label for="">School Address</label> 
                               <input type="text" name="schAddress" id="address" class="form-control" placeholder="School address">
                           </div>
                        </div>
                           <div class="row my-3">
                                <div class="col"><label for="">School Email</label> 
                                    <input type="email"  name="email" id="email" class="form-control" placeholder="School Email*" required>
                                 </div>
                            </div> 
                           <div class="row my-3">
                                <div class="col"><label for="">School Telephone Line</label> 
                                <input type="tel" id="phone" class="form-control" name="phone" placeholder="+234"  required>
                                 </div>
                            </div> 
                            <div class="submit-btn text-center my-5">
                           <button type="submit" name="submit" class="btn btn-primary rounded-pill text-light px-5">Register</button>
                       </div>
                    </form>
                  </div>
         </div>
      </div>
    </section>  -->
<!-- registration area end -->

    <?php include 'footer.php'; ?>  