<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<?php
session_start();
$a =$_SESSION['value']; // jobseeker_id
$c = oci_connect("system", "sys123", 'localhost/XE');

$array = oci_parse($c,"select * from project1.jobagent natural join project1.creating where '$a' =  jobseeker_id ");

oci_execute($array);

$i = 1;
while (($row = oci_fetch_array($array, OCI_BOTH)) != false) {
    // Use the uppercase column names for the associative array indices
	//echo $row[1] . "<br>" ;
	
	$tmp = $row[1];
	$lower = $row['SALARY_LOWER_BOUND'];
	$upper = $row['SALARY_UPPER_BOUND'];
	$category = $row['JOB_CATEGORY'];
	
	$array1 = oci_parse($c,"select JOB_TYPE ,post,job_category,
	company_name  from project1.jobs natural join project1.companyPostRealation
	natural join  project1.company where job_salary between '$lower' and '$upper' and job_category = '$category' ");
	oci_execute($array1);
	while(($row1 = oci_fetch_array($array1, OCI_BOTH))){
		echo "JOB TYPE: " .$row1['JOB_TYPE'] . "<br>" ;
		echo "POST TYPE: " .$row1['POST'] . "<br>" ;
		echo "Category: " .$row1['JOB_CATEGORY'] . "<br>" ;
		//echo $row1[3] . "<br>" ;
		echo "Company Name: " .$row1['COMPANY_NAME'] . "<br>" ;
		echo "<br>";
		
		echo 	"<form action='' method='post'> 
	<input type='submit' name=$i value='apply' /> 
	</form>";
    if(isset($_POST[$i])){ 
		
		
		$b = $row[0];
		//echo $a . "   " . $row[0];
		$stmt= "INSERT INTO project1.applyForJob(JOBSEEKER_ID,JOB_ID) 
		VALUES (:JOBSEEKER_ID_bv,:JOB_ID_bv)";
        $s=oci_parse($c, $stmt);
		oci_bind_by_name($s, "JOBSEEKER_ID_bv", $a);
		oci_bind_by_name($s, "JOB_ID_bv", $b);
		oci_execute($s);
     
		$_SESSION['massage'] = "successfully apply";
		header('Location: jobseekersuccess.php');
		break;
		echo  "<br>";
		echo  "<br>";
		echo  "<br>";
		
		
	} 
	
	
				$i = $i+1;
	}
}

oci_free_statement($array);
oci_close($c);

?>
