<?php 

    require_once("mysqli_connection.php");
    // require_once("auth/login.php");

    if(isset($_POST['update']))
    {

        $fileName = $_FILES['logo']['name'];
        $fileTmpNm = $_FILES['logo']['tmp_name'];
        $fileSize = $_FILES['logo']['size'];
        $fileExt = explode('.', $fileName);
        $fileType = strtolower(end($fileExt));
        $logoName = time()."_".strtolower($fileName);
        $target = "schoollogos/".$fileName;
        $allowed = ['png','jpeg','jpg',"jiff"];

         
        $id = $_GET['ID'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $loc = $_POST['location'];
        $state = $_POST['state'];
        $tel = $_POST['tel'];
        $funding = $_POST['funding'];
        $estYear = $_POST['estYear'];
        $abbr = $_POST['abbr'];
        


        if (!in_array($fileType, $allowed)) {
            echo "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'><span style='color: red; font-weight: bold; font-size: 11px;;'>".$fileType."</span> Format is not allowed. Only
            <span style='color: red; font-weight: bold; font-size: 11px;;'>jpg</span>, <span style='color: red; font-weight: bold; font-size: 11px;;'>jpeg</span> or <span style='color: red; font-weight: bold; font-size: 11px;;'>png</span> is allowed </div></center>";
        } elseif ($fileSize > 60000000) {
            echo "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'> File size should not be more than Mb </div></center>";
        } else {

            if (move_uploaded_file($fileTmpNm, $target)) {

                $query = " UPDATE schools set logo='".$fileName."', name = '".$name."', email='".$email."',address='".$address."',location='".$loc."',state='".$state."',tel='".$tel."',funding='".$funding."', estYear='".$estYear."',abbr='".$abbr."' where id='".$id."'";
                $result = mysqli_query($con,$query);
    
                if($result)
                {   
                    echo "<center><div id='' class='alert alert-success' style='font-size: 11px;'>Image Uploaded and Saved to Database <a href='index.php' style='font-size: 12px;'>Refresh</a></div></center>";
                    header("location:viewsch.php");
                }
                else
                {
                    echo "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'>Faild to Upload image to Database</div></center>";
                }

            }  else {
                echo "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'>Faild to Upload</div></center>";
            }

        }

           
    }
    else
    {
        header("location:viewsch.php");
    }


?>