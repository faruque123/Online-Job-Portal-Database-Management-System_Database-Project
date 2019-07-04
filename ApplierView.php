<?php
session_start();
$c1 = oci_connect('system', 'sys123', 'localhost/XE');

//$check = $_SESSION['value'];<?php

$c1 = oci_connect('system', 'sys123', 'localhost/XE');
    $array = oci_parse($c1, 'SELECT * FROM project1.view1');
				oci_execute($array);

				//obseeker_id,first_name,job_type,job_category,email_id,phone_number
$var = array("id" , "FRIST NAME", "JOB TYPE" , "JOB CATEGORY", "EMAIL" , "PHONE" ); 
while ($row = oci_fetch_array($array, OCI_BOTH)) {
    $j=1;
	while($j<5){
	   echo $var[$j] . ": " . $row[$j]."<br>";
	   $j = $j+1;
	}
	$array1 = oci_parse($c1, "SELECT resume_id FROM project1.upload where jobseeker_id = '$row[0]' ");
	oci_execute($array1);
	$row1 = oci_fetch_array($array);
	$_SESSION['cv_id'] = $row1[0];
	echo "<form action='showCv.php' method='post'> 
	 <input type='submit' name='bvar' value='SHOW CV' /> 
	 </form>";
    echo "</tr>\n";
}



?>



