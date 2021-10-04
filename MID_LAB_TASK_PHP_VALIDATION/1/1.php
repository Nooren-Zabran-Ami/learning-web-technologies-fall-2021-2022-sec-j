<?php
function checkName()
{
    if($_SERVER["REQUEST_METHOD"]=="post")
   {
    $name=$_POST['textfield'];
    if($name == " " || strlen($name) < 2  )
    {
      echo"Name is not valid, enter valid name.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Name Field </title>
</head>
<body>	
	<form method="post">
		<fieldset>
			<legend> Name </legend>
					<input type="text" name="myname" value=""> <br>
					<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>