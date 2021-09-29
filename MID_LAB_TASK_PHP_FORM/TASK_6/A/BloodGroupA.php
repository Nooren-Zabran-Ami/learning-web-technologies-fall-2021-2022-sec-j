<?php
	if(isset($_POST['submit'])){
		$BloodGroup = $_POST['BloodGroup'];
		if($BloodGroup == "" ){
			echo "null submission.";
		}else{
			echo $BloodGroup."<br>";
		}
	}
?>