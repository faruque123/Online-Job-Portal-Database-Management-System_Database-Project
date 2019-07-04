<?php $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521)))(CONNECT_DATA=(SID=xe)))" ; 
if ($c=OCILogon("system", "sys123", $db))
{ echo "Successfully connected to Oracle.\n"; 
OCILogoff($c); } 
else { $err = OCIError(); echo "Connection failed." .
$err[text]; } ?>