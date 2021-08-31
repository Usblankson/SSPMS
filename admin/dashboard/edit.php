<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>
<?php 

    require_once("mysqli_connection.php");
    require_once("auth/login.php");
    $id = $_GET['GetID'];
    $query = " select * from schools where id='".$id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $address =$row['address'];
        $loc = $row['location'];
        $state = $row['state'];
        $tel = $row['tel'];
        $funding =$row['funding'];
        $logo = $row['logo'];
        $estYear =$row['estYear'];
        $abbr = $row['abbr'];
    }

?>

<div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class=" text-primary text-center py-3"> Update School</h3>
                        </div>
                        <div class="card-body">

                        <form action="update.php?ID=<?php echo $id ?>" method="post">
                            <div class="row">
                            <!-- <img src="./assets/img/profile/unicross.jpg" style=" width: 200px; height: 200px;" class="img rounded" alt="School logo"> -->
                              <div class="col my-4"><label for="">Upload School LOGO</label>
                                <input type="file" class="form-control-file" placeholder="School Logo" name="schLogo" value="<?php echo $logo ?>" id="upload-profile">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">School Name</label>
                                  <input type="text" class="form-control mb-2" placeholder=" School Name " value="<?php echo $name ?>" name="name">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4">
                                  <label for="phone">Location</label>
                                  <input type="text" class="form-control mb-2" placeholder=" e.g Ile Ife " value="<?php echo $loc ?>" name="location">
                                </div>
                                <div class="col-md-3">
                                <label for="">State</label>
                                <select class="form-control" name="state" value="<?php echo $state ?>" id="funding">
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
                                  <input type="text" class="form-control mb-2" placeholder=" School Abbreviation " value="<?php echo $abbr ?>" name="abbr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="address">School Address</label>
                                  <input type="text" class="form-control mb-2" placeholder=" School Address " value="<?php echo $address ?>" name="address">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">School Email</label>
                                  <input type="email" class="form-control mb-2" placeholder=" School Email " value="<?php echo $email ?>" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                  <label for="phone">Phone Line</label>
                                  <input type="tel" class="form-control mb-2" placeholder=" +234 " value="<?php echo $tel ?>" name="tel">
                                </div>
                                <div class="col-md-4">
                                <label for="">Funding</label>
                                <select class="form-control" name="funding"  value="<?php echo $funding ?>"id="funding">
                                    <option>Federal</option>
                                    <option>State</option>
                                    <option>Private</option>
                                  </select>
                                </div>
                                <div class="col-md-4">
                                 <label for="estYear">Year of establishment</label>
                                <input type="date"  name="estYear" id="est-year" class="form-control form-control-sm" value="<?php echo $estYear ?>" placeholder="est-year*" required>
                                </div>
                            </div>
                                
                                <button class="btn btn-primary btn-block" name="update">Register</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>                                                              
                                   
    
<?php include 'footer.php'; ?>