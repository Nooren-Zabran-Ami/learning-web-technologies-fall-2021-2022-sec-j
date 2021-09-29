<?php
	if(isset($_POST['submit'])){
		$degree = $_POST['mydegree'];
		if($degree == "" ){
			echo "null submission.";
		}else{
			echo $degree."<br>";
		}
	}
?>