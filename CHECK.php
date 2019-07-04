<?php
session_start();
  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  
  $array = oci_parse($c1,"select project1.seq_jobseeker.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "job_" . $row[0];
$jobseeker_id1= $finalId;
$username1= $_POST['username'];
$password1= $_POST['password'];
$email_id1= $_POST['email_id'];
$first_name1= $_POST['first_name'];
$middle_name1= $_POST['middle_name'];
$last_name1= $_POST['last_name'];
$nationality1= $_POST['nationality'];
$marital_status1= $_POST['marital_status'];
$gender1= $_POST['gender'];

$ADRESS_ID1= $finalId;

echo "HEHEHEH " . $finalId . "<br>";

$DIVISON1= $_POST['division'];
$DISTRICT1= $_POST['district'];
$CITY1= $_POST['city'];
$COUNTRY1= $_POST['country'];
$STREETNO1= $_POST['streetNo'];
$POSTALCODE1= $_POST['postCode'];
 
echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.jobseeker(JOBSEEKER_ID,USERNAME,PASSWORD,EMAIL_ID,FIRST_NAME,MIDDLE_NAME,LAST_NAME,NATIONALITY,MARITAL_STATUS,GENDER) 
		VALUES (:jobseeker_id1_bv,:username_bv,:password_bv,:email_id_bv,:first_name_bv,:middle_name_bv,:last_name_bv,:nationality_bv,:marital_status_bv,:gender_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "jobseeker_id_bv", $jobseeker_id1);
oci_bind_by_name($s, "username_bv", $username1);
oci_bind_by_name($s, "password_bv", $password1);
oci_bind_by_name($s, "email_id_bv", $email_id1);
oci_bind_by_name($s, "first_name_bv", $first_name1);
oci_bind_by_name($s, "middle_name_bv", $middle_name1);
oci_bind_by_name($s, "last_name_bv", $last_name1);
oci_bind_by_name($s, "nationality_bv", $nationality1);
oci_bind_by_name($s, "marital_status_bv", $marital_status1);
oci_bind_by_name($s, "gender_bv", $gender1);

oci_execute($s);

$stmt= "INSERT INTO project1.adress(ADRESS_ID,DIVISON,DISTRICT,CITY,COUNTRY,STREETNO,POSTALCODE)
VALUES (finalId_bv,:division_bv,:district_bv,:city_bv,:country_bv,:streetNo_bv,:postCode_bv)";

$s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "jobseeker_id_bv", $ADRESS_ID1);
oci_bind_by_name($s, "division_bv", $DIVISON1);
oci_bind_by_name($s, "district_bv", $DISTRICT1);
oci_bind_by_name($s, "city_bv", $CITY1);
oci_bind_by_name($s, "country_bv", $COUNTRY1);
oci_bind_by_name($s, "streetNo_bv", $STREETNO1);
oci_bind_by_name($s, "postCode_bv", $POSTALCODE1);

oci_execute($s);

echo "inserted";
?>	
