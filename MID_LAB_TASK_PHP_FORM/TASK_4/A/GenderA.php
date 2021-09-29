<?php
	if(isset($_POST['submit'])){
		$gender = $_POST['mygender'];
		if($gender == "" ){
			echo "null submission.";
		}else{
			echo $gender."<br>";
		}
	}
?>