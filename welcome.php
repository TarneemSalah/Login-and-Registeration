<?php

    

   $email = filter_input(INPUT_POST, 'email');
   $pass = filter_input(INPUT_POST, 'pass');

  
   $servername = "localhost";
   $username = "root";
   $password = '';
   $dbname = "ddl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT* from user where email= '$email' and password= '$pass'";
$sql1 = "SELECT* from depart ;";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p> <font color=sienna size='10pt'> welcome:</font> <font color=white size='10pt'></font>  " . $row["name"] . "</p>";
        echo "<br />";

    while($row = $result1->fetch_assoc()) {
        echo "<p> <font color=sienna size='4pt'>  depart Name:</font> <font color=blue size='4pt'></font> " . $row["name"] . "  <font color=sienna size='4pt'>Description:</font> <font color=blue size='4pt'></font> " .$row["description"]."</p> ";
        }
    
} }else {
    echo "<p> <font color=sienna size='10pt'>NOT FOUND </font> <font color=white size='10pt'></font>";
}


// if (mysqli_num_rows($result)> 0) {
//   // output data of each row
//   echo "<br> welcome: ". $_GET["name"]. "";
    
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }

$conn->close();

   	?>

   	<html>
   	<link rel="stylesheet" type="text/css" href="style1.css">
  <head>
    
    
  </head>
  <body>
    
  </body>
</html>
   	