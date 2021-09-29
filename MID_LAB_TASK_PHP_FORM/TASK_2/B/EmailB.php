<?php
	if(isset($_POST['submit'])){
		$email = $_POST['myemail'];
		if($email == "" ){
			echo "null submission.";
		}else{
			echo $email."<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Email Field </title>
</head>
<body>	
	<form method="post" action="email.php">
		<fieldset>
			<legend>Email</legend>
						<input type="email" name="myemail" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>