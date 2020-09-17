<!-- 
The program checks if the values of name, age, and phoneNumber
in the query strings are empty, in which case sets the error
values to true. This results in the table displaying "No query
string found. Otherwise it will display the values.
 -->

<?php 
	if (empty($_GET['name']))
		$errorName=TRUE;
	
	if (empty($_GET['age'])) 
		$errorAge=TRUE;
	
	if (empty($_GET['phoneNumber']))
		$errorPhoneNumber=TRUE;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Assignment 3</title>
  <style>
  table, td { 
		border: 1px solid black; 
		border-collapse:collapse;  
		padding: 15px
		}
  </style>
  </head>

  <body>
  
	<table>
	
	<tr>
		<td width = "32%">Name</td>
		<td>
			<?php if (isset($errorName)) { ?>
				No query string found.
			<?php } else {
						echo $_GET['name'];
						 } ?>
		</td>
	</tr>
	
	<tr>
		<td>Age</td>
		<td>
			<?php if (isset($errorAge)) { ?>
				No query string found.
			<?php } else {
						echo $_GET['age'];
						 } ?>
		</td>
	</tr>
	
	<tr>
		<td>Phone Number</td>
		<td>
			<?php if (isset($errorPhoneNumber)) { ?>
				No query string found.
			<?php } else {
						echo $_GET['phoneNumber'];
						 } ?>
		</td>
	</tr>
	
	</table>
	
	</body>
</html>