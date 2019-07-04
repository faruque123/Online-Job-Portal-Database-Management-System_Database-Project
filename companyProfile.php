<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>

<?php
   session_start();
   $a =$_SESSION['companyId'];
   $_SESSION['massage'] = NULL;
   $c = oci_connect("system", "sys123", 'localhost/XE');
   $array = oci_parse($c,"select COMPANY_NAME from project1.company");
   oci_execute($array);
   
   $row=oci_fetch_array($array);
   echo "Welcome Company: " .  $row[0];
   
   // post job

?>

<html>
<body>

<form action="jobFrom.php" method="post">
  <input type="submit" value="POST JOB">
</form>

<form action="ApplierView.php" method="POST">
			<p>
				<input type="submit" id="btn" value="CHECK ALL WHO HAS APLLIED" />
			</p>
</form>

<form action="trainingform.php" method="post">
  <input type="submit" value="Add Training Program">
</form>

<form action="addpaymentform.php" method="post">
  <input type="submit" value="Give Advertisement">
</form>


<form action="logout.php" method="post">
  <input type="submit" value="LOG OUT">
</form>


</body>
</html>