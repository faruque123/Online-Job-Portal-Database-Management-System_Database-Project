<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="jobseekerlogin.php" method="POST">
		<p>
		<label>Username:</label>
		<input type="text" id="user" name="user"/>
		</p>
		<p>
		<label>Password:</label>
		<input type="password" id="pass" name="pass" />
		</p>
		<p>
			<input type="submit" id="btn" value="Login" />
		</p>
		
	</form>

</div>

<div id="frm">
	<form action="jobseekerRegisterForm.php" method="POST">
		<p>
			<input type="submit" id="btn" value="REGISTER" />
		</p>
		
	</form>

</div>



</body>


</html>