<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<?php
session_start();
$a =$_SESSION['value'];
$category1 = $_POST['category'];
$c = oci_connect("system", "sys123", 'localhost/XE');
//$array = oci_parse($c,"select * from project1.company
//where lower(COMPANY_NAME) like '%".$category1."%'");

// st
$array = oci_parse($c,"select JOB_TYPE,JOB_CATEGORY	,POST,VACANCY	,REQUIRED_EXPERINCE,	DEAD_LINE,	
JOB_SALARY from project1.company natural join project1.companyPostRealation natural join project1.jobs 

where lower(COMPANY_NAME) like lower('%".$category1."%')");
//
oci_execute($array);
$i = 1;
while($row=oci_fetch_array($array)){
   echo "JOB TYPE: " . $row['JOB_TYPE'] . "<br>" ;
    echo "JOB CATEGORY: " . $row['JOB_CATEGORY'] . "<br>" ; 
	 echo "POST FOR THE JOB :" . $row['POST'] . "<br>" ;
		 echo "Salary: " . $row['JOB_SALARY'] . "<br>" ;
		 echo  "<br>" . "<br>";
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
		header('Location: showjobs.php');
		break;
		echo  "<br>";
		echo  "<br>";
		echo  "<br>";
		
		
	} 
		
	$i = $i+1;
}
	
	//select JOB_ID from companyPostRealation
//natural join company
//where lower(COMPANY_NAME) like '%".$text."%'
//$array = oci_parse($c,"select JOB_ID from companyPostRealation
//natural join company
//where lower(COMPANY_NAME) like '%".$a."%'");
?>

