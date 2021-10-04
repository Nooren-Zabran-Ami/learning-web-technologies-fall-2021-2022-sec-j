<?php
function dateOfBirth()
{
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $date = $_POST['dateOfBirth'];

    if(empty($date))
    {
      echo "you need to select date.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Date Of Birth Field </title>
</head>
<body>	
	<form method="post" action="dateofbirth.php">
		<fieldset>
			<legend> Date </legend>
						<input type="date" name="mydateofbirth" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>