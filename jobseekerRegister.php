<?php
session_start();
  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  
  $array = oci_parse($c1,"select project1.seq_jobseeker.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "job_" . $row[0];
$_SESSION['value'] = $finalId;
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


$division1= $_POST['division'];
$district1= $_POST['district'];
$city1= $_POST['city'];
$country1= $_POST['country'];
$streetNo1= $_POST['streetNo'];
$postCode1= $_POST['postCode'];

echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.jobseeker(JOBSEEKER_ID,USERNAME,PASSWORD,EMAIL_ID,FIRST_NAME,MIDDLE_NAME,LAST_NAME,NATIONALITY,MARITAL_STATUS,GENDER) 
		VALUES (:finalId_bv,:username_bv,:password_bv,:email_id_bv,:first_name_bv,:middle_name_bv,:last_name_bv,:nationality_bv,:marital_status_bv,:gender_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "finalId_bv", $jobseeker_id1);
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




$stmt= "INSERT INTO project1.jobseeker_adress(jobseeker_adress_id,divison,district,city,country,streetNo,houseNo,postalCode) 
		VALUES (:finalId_bv,:division1_bv,:district1_bv,:country1_bv,:city1_bv,:country1_bv,:streetNo1_bv,:postCode1_bv)";
 $s=oci_parse($c1, $stmt);
oci_bind_by_name($s, "finalId_bv", $finalId);
oci_bind_by_name($s, "division1_bv", $division1);
oci_bind_by_name($s, "division1_bv", $division1);
oci_bind_by_name($s, "district1_bv", $district1);
oci_bind_by_name($s, "city1_bv", $city1);
oci_bind_by_name($s, "country1_bv", $country1);
oci_bind_by_name($s, "streetNo1_bv", $streetNo1);
oci_bind_by_name($s, "postCode1_bv", $postCode1);
oci_execute($s);


//INSERT MULTI VALUE

$phone_number1= $_POST['phone_number'];
$JOBSEEKER_ID1= $finalId;

$stmt= "INSERT INTO project1.SEEKERPHONENUMBER(JOBSEEKER_ID,PHONE_NUMBER) 
		VALUES (:JOBSEEKER_ID1_bv,:phone_number1_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "JOBSEEKER_ID1_bv", $JOBSEEKER_ID1);
oci_bind_by_name($s, "phone_number1_bv", $phone_number1);
oci_execute($s);

header('Location: cvBasicInfo.php');

echo "inserted";
?>	
