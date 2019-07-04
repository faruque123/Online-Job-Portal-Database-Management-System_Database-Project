<?php
  session_start();
$name1= $_POST['name'];
$date_of_birth1= date('d-m-Y', strtotime($_POST['date_of_birth']));
$blood_group1= $_POST['blood_group'];
$father_name1= $_POST['father_name'];
$mother_name1= $_POST['mother_name'];
$work1= $_POST['work'];
$ssc_passing_year1= $_POST['ssc_passing_year'];
$ssc_gpa1= $_POST['ssc_gpa'];
$hsc_passing_year1= $_POST['hsc_passing_year'];
$hsc_gpa1= $_POST['hsc_gpa'];
$graduation1= $_POST['graduation'];
$cgpa11= $_POST['cgpa1'];
$university11= $_POST['university1'];
$post_graduation1= $_POST['post_graduation'];
$university22= $_POST['university2'];
$cgpa22= $_POST['cgpa2'];


  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  $final = $_SESSION['cv_id'];
  $final1 = $final;
  echo  $_SESSION['cv_id'];
$stmt= "INSERT INTO project1.resume(RESUME_ID,NAME,BLOOD_GROUP,DATE_OF_BIRTH,FATHER_NAME,MOTHER_NAME,RECENTLY_WORKING_FOR) 
		VALUES(:final1_bv,:name1_bv,:blood_group1_bv,to_date('" . $date_of_birth1 . "','dd-mm-yy'),:father_name1_bv,:mother_name1_bv,:work1_bv)";
 $s=oci_parse($c1, $stmt);


oci_bind_by_name($s, "final1_bv", $final);
oci_bind_by_name($s, "name1_bv", $name1);
oci_bind_by_name($s, "blood_group1_bv", $blood_group1);
oci_bind_by_name($s, "father_name1_bv", $father_name1);
oci_bind_by_name($s, "mother_name1_bv", $mother_name1);
oci_bind_by_name($s, "work1_bv", $work1);
 oci_execute($s);

$stmt= "INSERT INTO project1.educational_details(RESUME_ID,SSC_PASSING_YEAR,SSC_GPA,HSC_PASSING_YEAR,HSC_GPA,GRADUATION,UNIVERSITY1,CGPA1,POST_GRADUATION,UNIVERSITY2,CGPA2) 
		VALUES (:final1_bv,:ssc_passing_year1_bv,:ssc_gpa1_bv,
		:hsc_passing_year1_bv,:hsc_gpa1_bv,:graduation1_bv,
		:university11_bv,:cgpa11_bv,:post_graduation1_bv,:university22_bv,:cgpa22_bv)";
 $s=oci_parse($c1, $stmt);
 
oci_bind_by_name($s, "final1_bv", $final1);
oci_bind_by_name($s, "ssc_passing_year1_bv", $ssc_passing_year1);
oci_bind_by_name($s, "ssc_gpa1_bv", $ssc_gpa1);
oci_bind_by_name($s, "hsc_passing_year1_bv", $hsc_passing_year1);
oci_bind_by_name($s, "hsc_gpa1_bv", $hsc_gpa1);
oci_bind_by_name($s, "graduation1_bv", $graduation1);
oci_bind_by_name($s, "university11_bv", $university11);
oci_bind_by_name($s, "cgpa11_bv", $cgpa11);
oci_bind_by_name($s, "post_graduation1_bv", $post_graduation1);
oci_bind_by_name($s, "university22_bv", $university22);
oci_bind_by_name($s, "cgpa22_bv", $cgpa22);

 
 oci_execute($s);

 
 	$stmt= "INSERT INTO project1.upload(jobseeker_id,resume_id) 
		VALUES(:a_bv,:final_bv)";
    $s=oci_parse($c1, $stmt);
	$a = $_SESSION['value'];
	$final = $_SESSION['cv_id'];
	oci_bind_by_name($s, "a_bv", $a);
    oci_bind_by_name($s, "final_bv", $final);
	oci_execute($s);
	
	
	
 header('Location: experienceFrom.php');
 echo "inserted";

?>	