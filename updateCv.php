<?php
session_start();

echo '<body bgcolor="#AED6F1">' ;

$a = $_SESSION['value'];
$c = oci_connect("system", "sys123", 'localhost/XE');
$aa =  $_SESSION['cv_id'];
$array = oci_parse($c,"select resume_id from project1.upload where jobseeker_id = '$a'");
oci_execute($array);
$row=oci_fetch_array($array);
$cv = $row[0];

$array = oci_parse($c,"select name,blood_group,date_of_birth,father_name,mother_name,
recently_working_for,SSC_PASSING_YEAR,SSC_GPA,
HSC_PASSING_YEAR,
HSC_GPA,GRADUATION,UNIVERSITY1,CGPA1,POST_GRADUATION,UNIVERSITY2,
CGPA2 from project1.resume natural join
project1.educational_details
where '$cv' = resume_id");
oci_execute($array);
$row=oci_fetch_array($array);
$temp = array("NAME:","BLOOD GROUP:","DATE OF BIRTH" , "FATHER's NAME:" , "MOTHER NAME:","RECENTLY WORK FOR",
       "SSC PASSING YEAR:","SSC GPA:" , "HSC PASSING YEAR:" , "HSC GPA:",
	   "GRADUATION:","UNIVERSITY:","CGPA:" , "POST GRADUATION:" , "UNIVERSITY:",
	   "CGPA:");

	$save = new SplFixedArray(20);

   $i = 0;
   while($i < 16){
    echo $temp[$i] .	"<form action='' method='post'> 
	<input type='text' name='$i' value='$row[$i]' /><br><br>";
	
	if($i==15){
	    echo "
		<input type='submit' name='click' value='update' /> 
		</form>";
	}

	$i = $i+1;
   }
   $i = 0;
  
   	if(isset($_POST['click'])){ 

   		    // name
	 	    $stmt = "update project1.resume set name = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[0]);
			oci_execute($s); 
            // blood group
			$stmt = "update project1.resume set blood_group = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[1]);
			oci_execute($s);  
            // father name
			$stmt = "update project1.resume set father_name = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[3]);
			oci_execute($s);
            // mother name
			$stmt = "update project1.resume set mother_name = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[4]);
			oci_execute($s);  

			$stmt = "update project1.resume set recently_working_for = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[5]);
			oci_execute($s);  

			$stmt = "update project1.educational_details set SSC_PASSING_YEAR = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[6]);
			oci_execute($s); 

						$stmt = "update project1.educational_details set SSC_GPA = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[7]);
			oci_execute($s);  

						$stmt = "update project1.educational_details set HSC_PASSING_YEAR = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[8]);
			oci_execute($s); 

						$stmt = "update project1.educational_details set HSC_GPA = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[9]);
			oci_execute($s); 

			$stmt = "update project1.educational_details set GRADUATION = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[10]);
			oci_execute($s); 

			$stmt = "update project1.educational_details set UNIVERSITY1 = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[11]);
			oci_execute($s);   

			$stmt = "update project1.educational_details set CGPA1 = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[12]);
			oci_execute($s);   

			$stmt = "update project1.educational_details set POST_GRADUATION = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[13]);
			oci_execute($s);  

			$stmt = "update project1.educational_details set UNIVERSITY2 = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[14]);
			oci_execute($s); 

			$stmt = "update project1.educational_details set CGPA2 = :xx_bv where resume_id = '$aa' ";
			$s=oci_parse($c, $stmt);
			oci_bind_by_name($s, "xx_bv", $_POST[15]);
			oci_execute($s);   
	} 


header('Location: jobseekersuccess.php');


?>
