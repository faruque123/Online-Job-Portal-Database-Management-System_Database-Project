<?php
session_start();

echo '<body bgcolor="#AED6F1">' ;

$a = $_SESSION['value'];
$c = oci_connect("system", "sys123", 'localhost/XE');
$aa =  $_SESSION['cv_id'];
$array = oci_parse($c,"select resume_id from project1.upload where jobseeker_id = '$a'");
oci_execute($array);
$row=oci_fetch_array($array);
$cv = $row[0];

$array = oci_parse($c,"select name,blood_group,date_of_birth,father_name,mother_name,
recently_working_for,SSC_PASSING_YEAR,SSC_GPA,
HSC_PASSING_YEAR,
HSC_GPA,GRADUATION,UNIVERSITY1,CGPA1,POST_GRADUATION,UNIVERSITY2,
CGPA2 from project1.resume natural join
project1.educational_details
where '$cv' = resume_id");
oci_execute($array);
$row=oci_fetch_array($array);
$temp = array("NAME:","BLOOD GROUP:","DATE OF BIRTH" , "FATHER's NAME:" , "MOTHER NAME:","RECENTLY WORK FOR",
       "SSC PASSING YEAR:","SSC GPA:" , "HSC PASSING YEAR:" , "HSC GPA:",
	   "GRADUATION:","UNIVERSITY:","CGPA:" , "POST GRADUATION:" , "UNIVERSITY:",
	   "CGPA:");

	$save = new SplFixedArray(20);

   $i = 0;
   while($i < 16){
    echo $temp[$i] .":" . $row[$i] . "<br> <br>";

	$i = $i+1;
   }


// header('Location: jobseekersuccess.php');


//?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="companyProfile.php" method="post">
<input type="submit" value="GO BACK TO PROFILE">
</form>
</body>
</html>