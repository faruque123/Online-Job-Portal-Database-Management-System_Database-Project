<?php
session_start();
  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  
  $array = oci_parse($c1,"select project1.seq_company.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "com_" . $row[0];
$company_id1= $finalId;
$name1= $_POST['name'];
$alternative1= $_POST['alternative'];
$userName1= $_POST['userName'];
$email1= $_POST['email'];
$pass1= $_POST['pass'];

$division1= $_POST['division'];
$district1= $_POST['district'];
$city1= $_POST['city'];
$country1= $_POST['country'];
$streetNo1= $_POST['streetNo'];
$postCode1= $_POST['postCode'];


 
//echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.company(COMPANY_ID,COMPANY_NAME,EMAIL,COMPANY_ALTERNATE_NAME,PASSWORD,USER_NAME) 
		VALUES (:company_id_bv,:name_bv,:email_bv,:alternative_bv,:pass_bv,:userName_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "company_id_bv", $company_id1);
oci_bind_by_name($s, "name_bv", $name1);
oci_bind_by_name($s, "email_bv", $email1);
oci_bind_by_name($s, "alternative_bv", $alternative1);
oci_bind_by_name($s, "pass_bv", $pass1);
oci_bind_by_name($s, "userName_bv", $userName1);
oci_execute($s);

$stmt= "INSERT INTO project1.company_adress(company_adress_id,divison,district,city,country,streetNo,houseNo,postalCode) 
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

echo "inserted";

?>