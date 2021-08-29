<?php

   
   $email = filter_input(INPUT_POST, 'email');
   $fname = filter_input(INPUT_POST, 'fname');
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

$sql = "INSERT INTO user (email,name,password)
VALUES ('$email','$fname','$pass')";

if ($conn->query($sql) === TRUE) {
  echo "<p> <font color=sienna size='30pt'>New record created successfully</font> <font color=red size='4pt'></font></p>";
} else {
  echo "<p> <font color=sienna size='30pt'>Error: </font> <font color=red size='4pt'></font>" . $sql . "</p>" . $conn->error;
}

$conn->close();
	?>
<html>
   	<link rel="stylesheet" type="text/css" href="style1.css">
  <head>
    
    
  </head>
  <body>
    
  </body>
</html>
   	