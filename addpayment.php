<?php
	echo '<body bgcolor="#AED6F1">' ;
?>

<?php
session_start();
  $c1 = oci_connect("SYSTEM", "sys123", 'localhost/XE');

  
$array = oci_parse($c1,"select project1.seq_company.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "payment_" . $row[0];
$company_id1= $finalId;
$pm1= $_POST['pm'];
$pf1= $_POST['pf'];
$pa1= $_POST['pa'];
$ps1= $_POST['ps'];
$pdate = date('d-m-Y', strtotime($_POST['pd']));
//$division1= $_POST['division'];
//$district1= $_POST['district'];
//$city1= $_POST['city'];
//$country1= $_POST['country'];
//$streetNo1= $_POST['streetNo'];
//$postCode1= $_POST['postCode'];


 
//echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.payment(PAYMENT_ID,PAYMENT_METHOD,PAYMENT_FOR,PAYMENT_AMOUNT,PAYMENT_DATE,PAYMENT_STATUS) 
		VALUES (:pi_bv,:pm_bv,:pf_bv,:pa_bv,to_date('" . $pdate . "','dd-mm-yy'),:ps_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "pi_bv", $company_id1);
oci_bind_by_name($s, "pm_bv", $pm1);
oci_bind_by_name($s, "pf_bv", $pf1);
oci_bind_by_name($s, "pa_bv", $pa1);
oci_bind_by_name($s, "ps_bv", $ps1);


oci_execute($s);

echo "Inserted";
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="advertisementform.php" method="POST">
		
		<p>
			<input type="submit" id="btn" value="Give Advertisement" />
		</p>
		
	</form>

</div>



</body>


</html>	
