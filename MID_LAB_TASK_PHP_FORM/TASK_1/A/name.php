<?php
	if(isset($_POST['submit'])){
		$BloodGroup = $_POST['myname'];
		if($name == "" ){
			echo "null submission.";
		}else{
			echo $name."<br>";
		}
	}
?>