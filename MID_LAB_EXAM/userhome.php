<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
    <head>
	        <title> Home Page </title>
    </head>
    <body>
	    <h1> Welcome Anney! </h1>
	    <a href="profile.php"> Profile</a> 
        <a href="changepassword.php"> Change Password</a> 
	    <a href="logout.php"> logout</a>
    </body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>