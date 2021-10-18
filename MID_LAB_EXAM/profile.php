<?php
	session_start();

	if(isset($_POST['submit'])){
		$username= $_POST['username'];
        if($username!=''){
            $_SESSION['user']['username']=$username;
            header('location: ../view/viewProfile.php');
        }
	}else{
		echo "Invalid request...";
	}

?>