<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>
<?php 

    require_once("mysqli_connection.php");
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
            <div class="row well">
                <div class="col-lg-12 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class=" text-primary text-center py-3">School Profile</h3>
                        </div>
                        <div class="card-body">
                        <div>
                        <p>  <span><h4>School LOGO :</h4> </span> <?php echo $logo ?></p>
                        </div>
                        
                        <p> <span><h4>School Name:</h4></span>  <?php echo $name ?> </p>
                        <p> <span><h4>School ABBR:</h4></span>     <?php echo $abbr ?> </p>
                        <p> <span> <h4>Funding:</h4> </span>   <?php echo $funding ?> </p>
                        <p> <span><h4>Founded:</h4></span>     <?php echo $estYear ?> </p>
                        <p> <span><h4>School Address:</h4></span>     <?php echo $address ?> </p>
                        <p> <span><h4>Location:</h4></span>     <?php echo $loc?> </p>
                        <p> <span><h4>State:</h4></span>     <?php echo $state ?> </p>
                        <p> <span><h4>School Email:</h4></span>     <?php echo $email ?> </p>
                        <p> <span><h4>School Phone:</h4></span>     <?php echo $tel ?> </p>
                        
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>                                                              
                                   
    
<?php include 'footer.php'; ?>