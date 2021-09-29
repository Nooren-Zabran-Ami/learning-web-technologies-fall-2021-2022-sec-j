<?php
	if(isset($_POST['submit'])){
		$dateofbirth = $_POST['mydateofbirth'];
		if($dateofbirth == "" ){
			echo "null submission.";
		}else{
			echo $dateofbirth."<br>";
		}
	}
?>