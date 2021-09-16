<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'topbar.php'; ?>
<?php 
    
    require_once("mysqli_connection.php");
    $query = " select * from schools ";
    $result = mysqli_query($con,$query);

?>
 
<div class="container">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-primary">Registered Schools</h1>
                        <a href="registersch.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add School</a>
                    </div>
            <div class="row">
                <div class="col m-auto card-body">
                    <div class="card mt-5 table-responsive">
                        <table class="table table-bordered id="dataTable" width="100%" cellspacing="0"">
                        <thead>    
                        <tr>
                                <th> S/N </th>
                                <th> School Name </th>
                                <th>School ABBR</th>
                                <th>State</th>
                                <th>Location</th>
                                <th>Funding</th>
                                <th>Founded</th>
                                <th>School Email</th>
                                <th>Phone</th>
                                <th> View</th>
                                <th>Edit  </th>
                                <th>Delete </th>
                            </tr>
</thead>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $abbr = $row['abbr'];
                                        $state = $row['state'];
                                        $loc = $row['location'];
                                        $funding = $row['funding'];
                                        $estYear = $row['estYear'];
                                        $email = $row['email'];
                                        $tel = $row['tel'];
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $abbr ?></td>
                                        <td><?php echo $state ?></td>
                                        <td><?php echo $loc ?></td>
                                        <td><?php echo $funding ?></td>
                                        <td><?php echo $estYear ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $tel ?></td>
                                        <td><a href="schprofile.php?GetID=<?php echo $id ?>"><i class="fas fa-fw fa-eye"></i></a></td>
                                        <td><a href="edit.php?GetID=<?php echo $id ?>"><i class="fas fa-fw fa-edit"></i></a></td>
                                        <td><a href="deletesch.php?Del=<?php echo $id ?>"><i class="fas fa-fw fa-trash"></i></a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>    
<?php include 'footer.php'; ?>