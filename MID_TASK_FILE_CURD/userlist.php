<!DOCTYPE html>
<html>
<head>
	<title> User List </title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="logout.php">logout </a> 
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			<th> ID </th>
			<th >NAME </th>
			<th> PASSWORD </th>
			<th> EMAIL </th>
			<th> ACTION </th>
		</tr>
		<tr>
			<td> 1 </td>
			<td> omi </td>
			<td> 12 </td>
			<td> omi@aiub.edu</td>
			<td>
				<a href="edit.php?id=1"> EDIT</a> | 
				<a href="delete.php?id=1"> DELETE</a> 
			</td>
		</tr>
		<tr>
			<td> 1 </td>
			<td> omi </td>
			<td> 12 </td>
			<td> omi@aiub.edu </td>
			<td>
				<a href="edit.php?id=2"> EDIT</a> | 
				<a href="delete.php?id=2"> DELETE</a> 
			</td>
		</tr>
	</table>
</body>
</html>