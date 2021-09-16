<?php
require_once("mysqli_connection.php");
// require_once("auth/login.php");
if(isset($_GET['Del']))
         {
             $id = $_GET['Del'];
             $query = " delete from schools where id = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:viewsch.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:viewsch.php");
         }