
<?php


$search = $_POST['search'];


$servername = "localhost";
$username = "root";
$password = "";
$db = "sspms_db";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}


$sql = "SELECT * from schools where `name` or `abbr` like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc()) {
	echo $row["name"]."<br>";
  echo $row["abbr"]."<br>";
  echo $row["location"]."<br>";
}
} else {
	echo "0 records";
  
}

$conn->close();



// //  CONNECT TO DATABASE
// if (isset($_POST['search'])) {
//     $searchValue = $_POST['search'];
//     $con = mysqli_connect("localhost", "root", "", "sspms_db");
    

//         //  SEARCH database
//         $sql = "SELECT * FROM schools WHERE name OR abbr LIKE '%$searchValue%'";

//       $result = mysqli_query($con,$sql);
    //     while ($row = $result->fetch_assoc()) {
    //         echo $row['name'] . "<br>";
    //         echo $row['abbr'] . "<br>";
    //     }
    //   }
    // }

     // if id exist 
    // show data in inputs
//     if(mysqli_num_rows($result) > 0)
//     {
//       while ($row = mysqli_fetch_array($result))
//       {
//           echo  $name = $row['name'];
//           echo  $abbr = $row['abbr'];
//           echo  $address = $row['address'];
//           echo  $loc = $row['location'];
//           echo  $email = $row['email'];
//           echo  $tel = $row['tel'];
        

//       }  
//     }
    
//     // if the id not exist
//     // show a message and clear inputs
//     else {
//         echo "Undefined";
//             $name = "";
//             $abbr = "";
//             $address = "";
//             $loc = "";
//             $email = "";
//             $tel = "";
//     }
    
    
//     mysqli_free_result($result);
//     mysqli_close($con);
    
// }

// if the first time inputs are empty
// else{
//   $name = "";
//   $abbr = "";
//   $address = "";
//   $loc = "";
//   $email = "";
//   $tel = "";
// }


  

?>