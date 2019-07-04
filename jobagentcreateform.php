<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<!DOCTYPE html>
<html>
<head>

<title>Create JOB agent</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="jobagentinsert.php" method="POST">
		<p>
		<label>agnet name:</label>
		<input type="text" id="pass" name="agent_name" />
		</p>
		
		<p>
		<label>salary upper:</label>
		<input type="number" id="pass" name="salary_upper_bound" />
		</p>
		
		<p>
		<label>salary lower:</label>
		<input type="text" id="pass" name="salary_lower_bound" />
		</p>
		
		<label>Category:</label>
		<select name="job_category">
		  <option value="IT">It & Telecommunication</option>
		  <option value="ACCOUNT">Account & Finance</option>
		  <option value="AGRICULTURE">Agriculture</option>
		  <option value="GARMENTS">Garments</option>
		  <option value="BANK">Bank</option>
		  <option value="NGO">NGO</option>
		</select> <br> <br>
		
		<p>
		<label>job type:</label>
		<input type="text" id="pass" name="job_type" />
		</p>
		
		<p>
			<input type="submit" id="btn" value="insert" />
		</p>
		
	</form>

</div>



</body>


</html>