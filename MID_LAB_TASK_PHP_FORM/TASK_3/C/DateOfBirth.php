<!DOCTYPE html>
<html>
<head>
	<title> Date Of Birth Field </title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Date Of Birth</legend>
			<input type="date" name="mydateofbirth" value="<?php if(isset($_POST['mydateofbirth'])){ echo $_POST['mydateofbirth'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>