<!DOCTYPE html>
<html>
<head>
	<title> Degree Field </title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="mydegree" value="<?php if(isset($_POST['mydegree'])){ echo $_POST['mydegree'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>