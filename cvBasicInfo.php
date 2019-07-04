<?php
	session_start();
	$a = $_SESSION['value'];
	$c1 = oci_connect("system", "sys123", 'localhost/XE');
	$array = oci_parse($c1,"select project1.seq_cv.nextval from DUAL");
	oci_execute($array);
	$row=oci_fetch_array($array);
	$final = "cv_" . $row[0];
	$_SESSION['cv_id'] = $final;
	
	echo $a . " " . $final ;
?>

<!DOCTYPE html>
<html>
<head>

<title>Create Resume</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#89BDFF">
<div id="frm">
	<form action="resumeInsert.php" method="POST">
			<p>
		<label>Name:</label>
		<input type="text" id="" name="name"/>
		</p>
		

        <p>
		<label>Blood Group:</label>
		<input type="text" id="pass" name="blood_group" />
		</p>

		<p>
		<label>Date Of Birth:</label>
		<input type="date" id="pass" name="date_of_birth" />
		</p>
		
		<p>
		<label>Father's Name:</label>
		<input type="text" id="pass" name="father_name" />
		</p>
		
		<p>
		<label>Mother's Name:</label>
		<input type="text" id="pass" name="mother_name" />
		</p>

		<p>
		<label>Recently work for:</label>
		<input type="text" id="pass" name="work" />
		</p>


        <p> EDUCATIONAL DETAIL </p>
			<p>
		<label>S.S.C Passing Year:</label>
		<input type="number" id="pass" name="ssc_passing_year" />
		</p>
		
		<p>
		<label>S.S.C GPA:</label>
		<input type="number" id="pass" name="ssc_gpa" />
		</p>
		
		<p>
		<label>H.S.C Passing Year:</label>
		<input type="number" id="pass" name="hsc_passing_year" />
		</p>
		
		<p>
		<label>H.S.C GPA:</label>
		<input type="number" id="pass" name="hsc_gpa" />
		</p>
		
		
		<p>
		<label>Graduation:</label>
		<input type="text" id="pass" name="graduation" />
		</p>
		
		<p>
		<label>University:</label>
		<input type="text" id="pass" name="university1" />
		</p>
		
		<p>
		<label>CGPA:</label>
		<input type="text" id="pass" name="cgpa1" />
		</p>
		
		<p>
		<label>Post Graduation:</label>
		<input type="text" id="pass" name="post_graduation" />
		</p>
		
		<p>
		<label>University:</label>
		<input type="text" id="pass" name="university2" />
		</p>
		
		<p>
		<label>CGPA:</label>
		<input type="text" id="pass" name="cgpa2" />
		</p>
				<p>
			<input type="submit" id="btn" value="NEXT" />
		</p>
	</form>

</div>



</body>


</html>