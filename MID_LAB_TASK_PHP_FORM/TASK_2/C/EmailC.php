<!DOCTYPE html>
<html>
<head>
	<title> Email Field </title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['myemail'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>