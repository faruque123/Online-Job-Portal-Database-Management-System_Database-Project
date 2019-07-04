<?php
session_start();
//ja input e dibo ekhane paoar jonno
$username = $_POST['user'];
$password = $_POST['pass'];
echo $username . "<br>" ;
echo $password . "<br>"  ;
$_SESSION['companyId'] = $username;

 
$c = oci_connect("system", "sys123", 'localhost/XE');


$array = oci_parse($c,"select USER_NAME , PASSWORD , COMPANY_ID from project1.company");
oci_execute($array);
while($row=oci_fetch_array($array)){
   echo $row[0] . "<br>" ;
   echo $row[1] . "<br>" ;
   if ($row[0] == $username && $row[1] == $password){
	    $_SESSION['companyId'] = $row[2];
	   header('Location: companyProfile.php');
	   break;
   }
   else{
	    echo "hahaha";
		header('Location: companyLogin.php');
   }	   
}
	


?>