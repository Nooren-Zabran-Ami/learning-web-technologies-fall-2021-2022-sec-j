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

<!DOCTYPE html>
<html>
    <head>
        <title> Gender Field </title>
    </head>
    <body>
        <fieldset>
            <legend> Gender </legend> 
               <input type="radio" name="mygender" value=""> Male
               <input type="radio" name="mygender" value=""> Female
               <input type="radio" name="mygender" value=""> Other <br>
               <input type="submit" value="Submit">
        </fieldset>
    </body>
</html>