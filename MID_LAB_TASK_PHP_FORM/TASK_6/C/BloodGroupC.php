<!DOCTYPE html>
<html>
<head>
	<title> Blood Group </title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Blood Group</legend>
			<input type="select" name="BloodGroup" value="<?php if(isset($_POST['BloodGroup'])){ echo $_POST['BloodGroup'];} ?>"> <br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>