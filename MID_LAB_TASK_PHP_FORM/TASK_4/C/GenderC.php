<!DOCTYPE html>
<html>
<head>
	<title> Gender Field </title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="mygender" value="<?php if(isset($_POST['mygender'])){ echo $_POST['mygender'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>