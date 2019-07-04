<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<form action="addExperience.php" method="POST">		
			<p>
		<label>Skilled in:</label>
		<input type="text" id="pass" name="skilled_in" />
		
			<p>
		<label>Exprience Year:</label>
		<input type="text" id="pass" name="exprience_year" />
		</p>
		
			<p>
		
	    <input type="submit" name = 'add' value="Add another" />
		<input type="submit" name = 'sub' value="SUBMIT" />

	</form>
</head>
<body>

</body>
</html>