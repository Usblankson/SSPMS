<?php
if(isset($_POST['search']))
{


$servername = "localhost";
$username = "root";
$password = "";
$db = "sspms_db";

$conn = new mysqli($servername, $username, $password, $db);

 @$search=$_POST['search_term'];
 @$id = $_GET['GetID'];
$query = "SELECT * from schools where name or abbr like '%$search%'";
 
 $get_result = mysqli_query($conn,$query);
 while($row=mysqli_fetch_array($get_result))
 {
  
  $id = $row['id'];
  echo "<li><a href='schprofile.php?GetID=".$row['id']."'><span class='title'>".$row['name']."</span><br><span class='desc'>".$row['abbr']."</span><br><span class='desc'>".$row['address']."</span></a></li>";
 }
 exit();
}



?>