<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$type= $_POST['type'];
		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=>$password, 'type'=>$type];
			$_SESSION['user'] = $user;
            $_SESSION['admin'] = $admin;
		}else{
			echo "Null value found...";
		}
	}else{
		echo "Invalid request...";
	}

?>