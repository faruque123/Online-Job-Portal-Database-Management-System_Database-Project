<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<?php
session_start();
$a =$_SESSION['value'];

#echo $a . "<br>";

$up = $_POST['BESHI'];
$low = $_POST['KOM'];
#echo   $low1  . " ". $low2 . "<br>";

$c = oci_connect("system", "sys123", 'localhost/XE');
$array = oci_parse($c,"select * from project1.jobs natural join project1.companyPostRealation natural join  project1.company 
where job_salary between  '$low' and  '$up'");
oci_execute($array);
$i=0;
while($row=oci_fetch_array($array)){
	echo "Company Name: " . $row['COMPANY_NAME'] . "<br>";
   echo "Category : " . $row['JOB_CATEGORY'] . "<br>" ;
   echo "Salary :" . $row['JOB_SALARY'] . "<br>" ;
	echo "<br>" . "<br>";
	
}
	
	//select JOB_ID from companyPostRealation
//natural join company
//where lower(COMPANY_NAME) like '%".$text."%'
//$array = oci_parse($c,"select JOB_ID from companyPostRealation
//natural join company
//where lower(COMPANY_NAME) like '%".$a."%'");
?>

