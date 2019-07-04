<?php
session_start();

echo '<body bgcolor="#AED6F1">' ;

$a = $_SESSION['companyId'];
//echo $a;
$c = oci_connect("system", "sys123", 'localhost/XE');

// relational table update
$array = oci_parse($c,"select project1.seq_jobs.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);

$companyId1 = $a;
$jobPost1 = "job_post_" . $row[0];

$stmt= "INSERT INTO project1.companyPostRealation(COMPANY_ID,JOB_ID) 
		VALUES (:companyId1_bv,:jobPost1_bv)";
 $s=oci_parse($c, $stmt);

oci_bind_by_name($s, "companyId1_bv", $companyId1);
oci_bind_by_name($s, "jobPost1_bv", $jobPost1);
oci_execute($s);

$job_id1 ="job_post_" . $row[0];
$jobType1 = $_POST['jobType'];
$category1 = $_POST['job_category'];
$post1 = $_POST['post'];
$vacancy1= $_POST['vacancy'];
$experience1 = $_POST['experience'];
$deadline1 = date('d-m-Y', strtotime($_POST['deadline']));
// date insert here
$jobsalary1 = $_POST['jobsalary'];
$job_division1 = $_POST['job_division'];
$country1 = $_POST['country'];
$address1 = $_POST['address'];
$stmt= "INSERT INTO project1.jobs(JOB_ID,JOB_TYPE,JOB_CATEGORY,POST,VACANCY,REQUIRED_EXPERINCE,DEAD_LINE,JOB_SALARY,JOB_DIVISION,COUNTRY,ADDRESS) 
		VALUES (:job_id1_bv,:jobType1_bv,:category1_bv,:post1_bv,:vacancy1_bv,:experience1_bv,to_date('" . $deadline1 . "','dd-mm-yy'),:jobsalary1_bv,
		    :job_division1_bv,:country1_bv,:address1_bv)";
 $s=oci_parse($c, $stmt);

oci_bind_by_name($s, "job_id1_bv", $job_id1);
oci_bind_by_name($s, "jobType1_bv", $jobType1);
oci_bind_by_name($s, "category1_bv", $category1);
oci_bind_by_name($s, "post1_bv", $post1);
oci_bind_by_name($s, "vacancy1_bv", $vacancy1);
oci_bind_by_name($s, "experience1_bv", $experience1);
oci_bind_by_name($s, "jobsalary1_bv", $jobsalary1);
oci_bind_by_name($s, "job_division1_bv", $job_division1);
oci_bind_by_name($s, "address1_bv", $address1);
oci_bind_by_name($s, "country1_bv", $country1);

oci_execute($s);

echo "POSTED SUCCESSFULLY";

header('Location: companyProfile.php');



?>