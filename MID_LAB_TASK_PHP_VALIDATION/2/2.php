<?php
function checkEmail()
{
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $email=$_POST['mailfield'];
    if($email==" ")
    {
      echo "Email field can not be empty";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Email Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend>Email</legend>
					<input type="email" name="myemail" value=""> <br>
					<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>