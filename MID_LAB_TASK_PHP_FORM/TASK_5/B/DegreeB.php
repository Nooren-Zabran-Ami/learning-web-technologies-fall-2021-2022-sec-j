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

<!DOCTYPE html>
<html>
    <body>
        <fieldset>
            <legend>Degree</legend> 
               <input type="checkbox" name="mydegree" value=""> SSC
               <input type="checkbox" name="mydegree" value=""> HSC
               <input type="checkbox" name="mydegree" value=""> BSc
               <input type="checkbox" name="mydegree" value=""> MSc <br>
               <input type="submit" value="Submit">
        </fieldset>
    </body>
</html>