<?php  
include('test.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo Application</title>
</head>
<body>
	<div class="heading">
		<h1 style= "text-align: center;"> TODO Application </h1> 
	</div>
	
	
		<form method="post" action="test.php">
			<input type="text" name="task" >
			<input type= "submit" name="submit" value ="Add New Task"/>
		
		</form>

</body>
</html>
