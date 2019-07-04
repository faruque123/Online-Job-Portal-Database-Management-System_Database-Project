<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>


<!DOCTYPE html>
<html>
<head>

<title>Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="jobseekerRegister.php" method="POST">
			
		<p>
		<label>username:</label>
		<br>
		<input type="text" id="pass" name="username" />
		</p>
		
		<p>
		<label>password:</label>
		<br>
		<input type="text" id="pass" name="password" />
		</p>
		
		<p>
		<label>email id:</label>
		<br>
		<input type="" id="pass" name="email_id" />
		</p>
		
		<p>
		<label>first name:</label>
		<br>
		<input type="text" id="pass" name="first_name" />
		</p>
		
		<p>
		<label>middle name:</label>
		<br>
		<input type="text" id="pass" name="middle_name" />
		</p>
		
		<p>
		<label>last name:</label>
		<br>
		<input type="text" id="pass" name="last_name" />
		</p>
		
		<p>
		<label>nationality:</label>
		<br>
		<input type="text" id="pass" name="nationality" />
		</p>
		
		<p>
		<label>marital status:</label>
		<br>
		<input type="text" id="pass" name="marital_status" />
		</p>
		
		<p>
		<label>gender:</label>
		<br>
		<input type="text" id="pass" name="gender" />
		</p>
			
		
		<p> Address: <br> </p>
			Division:<br> <input type="text" name="division"><br>
			District:<br> <input type="text" name="district"><br>
			City:<br> <input type="text" name="city"><br>
			Country:<br> <input type="text" name="country"><br>
			street No:<br> <input type="text" name="streetNo"><br>
			Postal Code:<br> <input type="text" name="postCode"><br>
								
	
		
		<p> Contact NO: <br> </p>
			Phone Number(active):<br> <input type="text" name="phone_number"><br>
		<p>
			<input type="submit" id="btn" value="NEXT" />
		</p>
		
	</form>

</div>



</body>


</html>