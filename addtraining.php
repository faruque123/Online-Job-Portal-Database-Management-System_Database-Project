<?php
session_start();
  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  
$array = oci_parse($c1,"select project1.seq_training.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "course_" . $row[0];
$company_id1= $finalId;
$coursetype= $_POST['ct'];
$comname= $_POST['company'];
$loc= $_POST['location'];
$sdate = date('d-m-Y', strtotime($_POST['st_date']));
$edate = date('d-m-Y', strtotime($_POST['end_date']));
$starttime= $_POST['starttime'];
$endtime= $_POST['endtime'];
$loc2= $_POST['cl'];
$cdate = date('d-m-Y', strtotime($_POST['c_date']));

//$division1= $_POST['division'];
//$district1= $_POST['district'];
//$city1= $_POST['city'];
//$country1= $_POST['country'];
//$streetNo1= $_POST['streetNo'];
//$postCode1= $_POST['postCode'];


 
//echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.training(COURSE_ID,COURSE_TYPE,COMPANY_NAME,COURSE_START_DATE,COURSE_END_DATE,LOCATION) 
		VALUES (:company_id_bv,:ct_bv,:comname_bv,to_date('" . $sdate . "','dd-mm-yy'),to_date('" . $edate . "','dd-mm-yy'),:loc_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "company_id_bv", $company_id1);
oci_bind_by_name($s, "ct_bv", $coursetype);
oci_bind_by_name($s, "comname_bv", $comname);
oci_bind_by_name($s, "loc_bv", $loc);


oci_execute($s);


$stmt= "INSERT INTO project1.schedule(COURSE_ID,CLASS_LOCATION,CLASS_START_TIME,CLASS_END_TIME,CLASS_DATE) 
		VALUES (:courseid_bv,:cl_bv,:st_bv,:et_bv,to_date('" . $cdate . "','dd-mm-yy'))";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "courseid_bv", $company_id1);
oci_bind_by_name($s, "cl_bv", $loc2);
oci_bind_by_name($s, "st_bv", $starttime);
oci_bind_by_name($s, "et_bv", $endtime);

oci_execute($s);
echo "Inserted";
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="trainingform.php" method="POST">
		
		<p>
			<input type="submit" id="btn" value="Back" />
		</p>
		
	</form>

</div>



</body>


</html>	
