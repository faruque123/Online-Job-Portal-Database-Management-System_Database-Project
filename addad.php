<?php
session_start();
  $c1 = oci_connect("system", "sys123", 'localhost/XE');

  
$array = oci_parse($c1,"select project1.seq_company.nextval from DUAL");
oci_execute($array);
$row=oci_fetch_array($array);
echo $row[0];
$finalId = "ad_" . $row[0];
$ad_id1= $finalId;
$title= $_POST['name'];
$type= $_POST['category'];
$height= $_POST['h'];
$width= $_POST['w'];
$cost= $_POST['cps'];
$sdate = date('d-m-Y', strtotime($_POST['st_date']));
$edate = date('d-m-Y', strtotime($_POST['end_date']));





//$division1= $_POST['division'];
//$district1= $_POST['district'];
//$city1= $_POST['city'];
//$country1= $_POST['country'];
//$streetNo1= $_POST['streetNo'];
//$postCode1= $_POST['postCode'];

 
//echo $jobseeker_id1 . "  " . $username1;

$stmt= "INSERT INTO project1.ADVERTISEMENT(ADVERTISEMENT_ID,ADVERTISEMENT_WIDE,ADVERTISEMENT_HEIGHT,COST_PER_SQURE,START_TIME,ENDING_TIME,ADVERTISEMENT_STATUS,ADVERTISEMENT_TITLE,ADVERTISEMENT_TYPE)
VALUES(:ad_id_bv, :w_bv, :h_bv, :cps_bv,to_date('" . $sdate . "','dd-mm-yy'),to_date('" . $edate . "','dd-mm-yy'),'Ongoing', :title_bv, :type_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "ad_id_bv", $ad_id1);
oci_bind_by_name($s, "w_bv", $width);
oci_bind_by_name($s, "h_bv", $height);
oci_bind_by_name($s, "cps_bv", $cost);
oci_bind_by_name($s, "title_bv", $title);
oci_bind_by_name($s, "type_bv", $type);


oci_execute($s);
echo "Inserted";


$pid = $_SESSION['payment_id'];
echo $pid;

$stmt= "INSERT INTO project1.AD_PAYMENT(PAYMENT_ID,ADVERTISEMENT_ID) VALUES (:pid_bv, :aid_bv)";
 $s=oci_parse($c1, $stmt);

oci_bind_by_name($s, "pid_bv", $pid);
oci_bind_by_name($s, "aid_bv", $ad_id1);


oci_execute($s);
echo "Inserted";




?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="frm">
	<form action="companyProfile.php" method="POST">
		
		<p>
			<input type="submit" id="btn" value="Back" />
		</p>
		
	</form>

</div>



</body>


</html>
