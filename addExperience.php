<?php
   session_start();
   $var = $_SESSION['cv_id'];
   $_SESSION['added'] = "SUCCESSFULLY ADDED!";
   $var1 = $var;
   echo  $_SESSION['cv_id'];
   $skilled_in1= $_POST['skilled_in'];
   $exprience_year1= $_POST['exprience_year'];
   $c1 = oci_connect("system", "sys123", 'localhost/XE');
 $stmt= "INSERT INTO project1.exprience(RESUME_ID ,EXPRIENCED_IN,EXPRIENCED_YEAR) 
VALUES(:var1_bv,:skilled_in1_bv,:exprience_year1_bv)";

 $s=oci_parse($c1, $stmt);
oci_bind_by_name($s, "var1_bv", $var1);
oci_bind_by_name($s, "skilled_in1_bv", $skilled_in1);
oci_bind_by_name($s, "exprience_year1_bv", $exprience_year1);
oci_execute($s);

   
 
   if(isset($_POST['add'])){
   	  header('Location: experienceFrom.php');
   }
   if(isset($_POST['sub'])){
   	  header('Location: jobseekersuccess.php');
   }

?>