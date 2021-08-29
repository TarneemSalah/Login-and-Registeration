<html>
<link rel="stylesheet" type="text/css" href="style1.css">

<head>
	<script>
		function validateForm() {
  var z = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["email"].value;
  var m = document.forms["myForm"]["pass"].value;
  var n = document.forms["myForm"]["confirm"].value;
  
  

if(z=="")
{
  alert("Please enter your name");
  return false;
}

if(y=="")
{
  alert("Please enter your email");
  return false;
}
if(m=="")
{
  alert("Please enter your password");
  return false;
}
if(n=="")
{
  alert("Please confirm your password");
  return false;
}
if(m != n)
{
  alert("worng password");
  return false;
}
}
	</script>
</head>
<body>
    <form name="myForm" action="test.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname"><br>
  E-mail: <input type="text" name="email"pattern="[a-z0-9._%+-]+@[a-z0-9.]+\.[a-z]{2,}$"><br>
  Password: <input type="password" name="pass"><br>
  Confirm Password: <input type="password" name="confirm"><br>
        <input type="submit" value="Submit">
     </form>

</body>
</html>