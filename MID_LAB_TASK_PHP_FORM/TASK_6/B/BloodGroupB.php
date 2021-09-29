<?php
	if(isset($_POST['submit'])){
		$BloodGroup = $_POST['myBloodGroup'];
		if($BloodGroup == "" ){
			echo "null submission.";
		}else{
			echo $BloodGroup."<br>";
		}
	}
?>

<!DOCTYPE html>
<html>
    <body>
        <fieldset>
            Blood Group
            <select name="BloodGroup"> 
               <option value="BloodGroup"> A+ </option> 
               <option value="BloodGroup"> A- </option> 
               <option value="BloodGroup"> O+ </option>
               <option value="BloodGroup"> B+ </option>  
               <option value="BloodGroup"> B- </option>
               <option value="BloodGroup"> O- </option>
            </select>
            <br>
            <input type="submit" value="Submit"> 
        </fieldset> 
    </body>
</html>