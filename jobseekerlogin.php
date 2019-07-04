<?php
session_start();

echo '<body bgcolor="#AED6F1">' ;

//ja input e dibo ekhane paoar jonno
$username = $_POST['user'];
$password = $_POST['pass'];
echo $username . "<br>" ;
echo $password . "<br>"  ;
$_SESSION['value'] = $username;
// to prevent mysql injection :/

$username = stripcslashes($username);
$password = stripcslashes($password);
///$username= mysql_real_escape_string($username);
///$password= mysql_real_escape_string($password);
 // connect to the server and select database
 ///mysql_connect("localhost","root","");
 ///mysql_select_db("login");
 
$c = oci_connect("system", "sys123", 'localhost/XE');


$array = oci_parse($c,"select username , password , jobseeker_id from project1.jobseeker");
oci_execute($array);
while($row=oci_fetch_array($array)){
   echo $row[0] . "<br>" ;
   echo $row[1] . "<br>" ;
   if ($row[0] == $username && $row[1] == $password){
	    $_SESSION['value'] = $row[2];
	   header('Location: jobseekersuccess.php');
	   break;
   }
   else{
	    echo "hahaha";
		header('Location: jobseekerloginform.php');
   }	   
}
	


?>