<?php
  session_start();
  $a = $_SESSION['value'];
  $c1 = oci_connect("system", "sys123", 'localhost/XE');
  
   $array = oci_parse($c1,"select project1.seq_jobseeker.nextval from DUAL");
  oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
  //echo "$a";
$finalId = "agent_" . $row[0];
$agent_id1= $finalId;
$jobseeker_id1= $a;
$agent_name1= $_POST['agent_name'];
$salary1= $_POST['salary_upper_bound'];
$salary2= $_POST['salary_lower_bound'];
$job_category1= $_POST['job_category'];
$job_type1= $_POST['job_type'];
 
$stmt= "INSERT INTO project1.jobagent(agent_id,agent_name,salary_upper_bound,salary_lower_bound,job_category,job_type) 
		VALUES (:agent_id_bv,:agent_name_bv,:salary_upper_bound_bv,:salary_lower_bound_bv,:job_category_bv,:job_type_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "agent_id_bv", $agent_id1);
//oci_bind_by_name($s, "jobseeker_id_bv", $jobseeker_id1);
oci_bind_by_name($s, "agent_name_bv", $agent_name1);
oci_bind_by_name($s, "salary_upper_bound_bv", $salary1);
oci_bind_by_name($s, "salary_lower_bound_bv", $salary2);
oci_bind_by_name($s, "job_category_bv", $job_category1);
oci_bind_by_name($s, "job_type_bv", $job_type1);
oci_execute($s);

 $stmt  = "insert into project1.creating(agent_id,jobseeker_id) values(:agent_id_bv,:jobseeker_id_bv)";
 $s=oci_parse($c1, $stmt);
 oci_bind_by_name($s, "agent_id_bv", $agent_id1);
oci_bind_by_name($s, "jobseeker_id_bv", $jobseeker_id1);
oci_execute($s);
		 echo "inserted";
		 //header('Location: jobseekersuccess.php');
		
		
?>	