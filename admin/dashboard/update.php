<?php 

    require_once("mysqli_connection.php");
    require_once("auth/login.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
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

        $query = " update schools set name = '".$name."', email='".$email."',address='".$address."',location='".$loc."',state='".$state."',tel='".$tel."',funding='".$funding."',logo='".$logo."',estYear='".$estYear."',abbr='".$abbr."' where id='".$id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:viewsch.php");
        }
        else
        {
            echo 'Please Check Your Query';
        }
    }
    else
    {
        header("location:viewsch.php");
    }


?>