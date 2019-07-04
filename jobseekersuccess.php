<?php
   session_start();
   $a =$_SESSION['value'];
   $_SESSION['massage'] = NULL;
   echo $_SESSION['added']. "<br>";
   $_SESSION['added'] = null;
   $c = oci_connect("system", "sys123", 'localhost/XE');
   $array = oci_parse($c,"select FIRST_NAME , MIDDLE_NAME from project1.jobseeker");
   oci_execute($array);
   $row=oci_fetch_array($array);
   echo "Welcome : " .  $row[0] . " " . $row[1];
   
   echo "<br>"; 
   echo "<br>"; 
	  
   
?>
<!DOCTYPE html>

<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>

<title>JOBSEEKER HOMEPAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="jobagentcreateform.php" method="POST">
		<p>
		<p>	Below : Create YOUR own JOB agent for Search your desire jobs from all the jobs!!!</p>
			<input type="submit" id="btn" value="CREATE JOB AGENT" />
		</p>
		
	</form>
			<body>
	<div id="frm">
		<form action="jobfilter.php" method="POST">
		<p>
			<input type="submit" id="btn" value="Search Jobs By (YOUR AGENT)" />
		</p>
		
	</form>

	</div>

</body>
	
	
	<br /> 
	  <br /> 
	  
	
	<form action="searchByCompanyName.php" method="post">
		<input type="text" name="category">  
		<input type="submit" type ="text" name = "searchByCategory" value = "JOB search by company Name">
     </form>

	 <br /> 
	  <br /> 
	  
	 	 
	 <form action="jobSearchByType.php" method="post">
		<select name="category">
		  <option value="IT">It & Telecommunication</option>
		  <option value="ACCOUNT">Account & Finance</option>
		  <option value="AGRICULTURE">Agriculture</option>
		  <option value="GARMENTS">Garments</option>
		  <option value="BANK">Bank</option>
		  <option value="NGO">NGO</option>
		</select> 
	    <input type="submit" value="JOB SEARCH BY CATEGORY">
	</form>
	
	<br /> 
	  <br /> 
	  
	
		 <form action="searchBySalary.php" method="post">
				<input type="number" name='BESHI' value = "Enter Upper range (Salary)">
				<br>		
				<input type="number" name='KOM' value = "Enter Lower range (Salary)"> 
				<br>
				<input type="submit"  value = "JOB search by salary">
		</form>
		
		
	<form action="searchByDivision.php" method="post">
		<select name="division">
		  <option value="chittagong">chittagong</option>
		  <option value="dhaka">dhaka</option>
		  <option value="comilla">comilla</option>
		  <option value="rajshahi">rajshahi</option>
		  <option value="barisal">barishal</option>
		  <option value="sylhet">sylhet</option>
		  <option value="other">overseas job</option>
		</select> 
	    <input type="submit" value="JOB SEARCH By division(Bangladesh)">
	</form>
	
	 
</div>



</body>



</html>

<br /> 
<br /> 
	  

<html>
<head>
<title>JOBSEEKER HOMEPAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

</html>

<br /> 
<br /> 
	  

<html>
<head>
<title>JOBSEEKER HOMEPAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="showjobs.php" method="POST">
		<p>
			<input type="submit" id="btn" value="All jobs" />
		</p>
		
	</form>

</div>



</body>

<br/> <br/>

<body>
<div id="frm">
	<form action="updateCv.php" method="POST">
		<p>
			<input type="submit" id="btn" value="Update Resume Or CV" />
		</p>
		
	</form>

</div>

	<form action="experienceFrom.php" method="POST">
		<p>
			<input type="submit" id="btn" value="ADD EXPERIENCE OR SKILL" />
		</p>
		
	</form>
	 <form action="logout.php" method="post">
	    <input type="submit" value="LOG OUT">
	</form>
	
</body>


</html>