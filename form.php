<?php

echo '<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>
  <div class="header">
       <h1>MAINTAINCE</h1>
  	
  </div>
   
   <form action="minsert.php"  method="POST">
   	<table>
   		<tr>
   		    <td>type</td>
   			<td><input type="text" name="Type" class="textInput"></td>
   		</tr>

   		<tr>
   		    <td>Cost</td>
   			<td><input type="text" name="Cost" class="number"></td>
   		</tr>

   	 <tr>
         <td>Date</td> 
        <td><input type="date" name="BD"   ></td>
      </tr>


   		<tr>  
   			<td><input type="submit" name="ok" value="Insert"></td>
   		</tr>

   	</table>

   </form>

</body>
</html>';

?>
