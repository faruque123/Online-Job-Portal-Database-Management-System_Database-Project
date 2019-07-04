<?php	
	echo '<body bgcolor="#AED6F1">' ;
?>
<?php

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>
  <div class="header">
       <h1>JOBAGENT</h1>
  	
  </div>
   
   <form action="jobagentinsert.php"  method="POST">
   	<table>
   		<tr>
   		    <td>agent_id</td>
   			<td><input type="text" name="agent_id" class="textInput"></td>
   		</tr>

   		<tr>
   		    <td>agent_name</td>
   			<td><input type="text" name="agent_name" class="textInput"></td>
   		</tr>
		
   		<tr>
   		    <td>job_type</td>
   			<td><input type="text" name="job_type" class="textInput"></td>
   		</tr>
		
   		<tr>
   		    <td>salary</td>
   			<td><input type="text" name="salary" class="number"></td>
   		</tr>

   	 
   		<tr>  
   			<td><input type="submit" name="ok" value="Insert"></td>
   		</tr>

   	</table>

   </form>

</body>
</html>';

?>
