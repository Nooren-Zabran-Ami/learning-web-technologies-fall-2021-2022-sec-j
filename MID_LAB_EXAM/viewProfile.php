<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title> View Profile </title>
</head>
<body>
    <div class="Profile">
    <fieldset>
            <legend> PROFILE:</legend>
                <table>
                    <tr>
                        <td>Username: </td>
                        <th><?=$_SESSION['user']['username']?></th>
                    </tr>
                    <tr>
                        <td>ID </td>
                        <th><?=$_SESSION['user']['id']?> </th>
                    </tr>
                    <tr>
                        <td>Type </td>
                        <th><?=$_SESSION['user']['type']?> </th>
                    </tr>
                </table>
        </fieldset>
    </div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./changePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>