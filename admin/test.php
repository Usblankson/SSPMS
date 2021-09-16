<?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $db = "sspms_db";
   
     $con = mysqli_connect($host, $user, $password, $db);

     

    if (isset($_POST['upload'])) {
        $fileName = $_FILES['logo']['name'];
        $fileTmpNm = $_FILES['logo']['tmp_name'];
        $fileSize = $_FILES['logo']['size'];
        $fileExt = explode('.', $fileName);
        $fileType = strtolower(end($fileExt));
        $logoName = time()."_".strtolower($fileName);
        $target = "schoollogos/".$fileName;
        $allowed = ['png','jpeg','jpg',"jiff"];

        if (!in_array($fileType, $allowed)) {
            $messsage = "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'><span style='color: red; font-weight: bold; font-size: 11px;;'>".$fileType."</span> Format is not allowed. Only
            <span style='color: red; font-weight: bold; font-size: 11px;;'>jpg</span>, <span style='color: red; font-weight: bold; font-size: 11px;;'>jpeg</span> or <span style='color: red; font-weight: bold; font-size: 11px;;'>png</span> is allowed </div></center>";
        } elseif ($fileSize > 60000000) {
            $messsage = "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'> File size should not be more than Mb </div></center>";
        } else {
            
            if (move_uploaded_file($fileTmpNm, $target)) {
                $sql = "INSERT INTO schools (logo) VALUES('$fileName') WHERE abbr='AAU'";
                if (mysqli_query($con, $sql)) {
                    $messsage = "<center><div id='' class='alert alert-success' style='font-size: 11px;'>Image Uploaded and Saved to Database <a href='index.php' style='font-size: 12px;'>Refresh</a></div></center>";
                    
                } else {
                    $messsage = "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'>Faild to Upload image to Database</div></center>";
                }
            }  else {
                $messsage = "<center><div id='msg' class='alert alert-danger' style='font-size: 11px;'>Faild to Upload</div></center>";
            }

        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Test</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="logo"><br>
        <input type="submit" name="upload" value="Upload">

    </form>
    
</body>
</html>