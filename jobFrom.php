<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>

<html>
<body>

<form action="jobPost.php" method="post">
Job Type:<br>
<select name="jobType">
  <option value="Full-time">Full Time</option>
  <option value="Per-time"> Per Time</option>
</select> <br> <br>

Category:<br>

		<select name="job_category">
		  <option value="IT">It & Telecommunication</option>
		  <option value="ACCOUNT">Account & Finance</option>
		  <option value="AGRICULTURE">Agriculture</option>
		  <option value="GARMENTS">Garments</option>
		  <option value="BANK">Bank</option>
		  <option value="NGO">NGO</option>
		</select> <br> <br>
		
post: <br><input type="text" name="post"><br>
Vacancy: <br><input type="text" name="vacancy"><br>
Required Experience:<br> <input type="text" name="experience"><br>
Country:<br> <input type="text" name="country"><br>
Deadline:<br> <input type="date" name="deadline"><br>
Job Salary:<br> <input type="text" name="jobsalary"><br>
Job Division:<br>

		<select name="job_division">
		  <option value="chittagong">chittagong</option>
		  <option value="dhaka">dhaka</option>
		  <option value="comilla">comilla</option>
		  <option value="barsial">barsial</option>
		  <option value="rajshahi">rajshahi</option>
		  <option value="sylhet">sylhet</option>
		  <option value="other">overseas</option>
		</select> <br> <br>
Address:<br> <input type="text" name="address"><br>
<input type="submit">
</form>

</body>
</html>