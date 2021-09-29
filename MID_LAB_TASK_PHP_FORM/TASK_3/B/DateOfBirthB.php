<?php
	if(isset($_POST['submit'])){
		$dateofbirth = $_POST['mydateofbirth'];
		if($dateofbirth == "" ){
			echo "null submission.";
		}else{
			echo $dateofbirth."<br>";
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
			<legend>Date Of Birth</legend>
						<input type="date" name="mydateofbirth" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>