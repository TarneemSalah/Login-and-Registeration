

<html>
<link rel="stylesheet" type="text/css" href="style1.css">
<head>
	<script>
		function validateForm() {
  var y = document.forms["myForm"]["email"].value;
  var m = document.forms["myForm"]["pass"].value;
  
}
	</script>
</head>
<body>
    <form name="myForm" action="welcome.php" onsubmit="return validateForm()" method="post">
  E-mail: <input type="text" name="email"
  pattern="[a-z0-9._%+-]+@[a-z0-9.]+\.[a-z]{2,}$"><br>
  Password: <input type="password" name="pass"><br>

          <input type="submit" value="Submit">
     </form>

</body>
</html>