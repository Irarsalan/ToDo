<?php  
include('test.php');


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo Application</title>
</head>
<body>
	
		<h1 style= "text-align: center;"> TODO Application </h1> 
	
	
	
		<form method="post" action="test.php">
			<label> Enter Task </label>
			<input type="text" name="task" > <br>
			
			<label> Enter Due Date (mm/dd/yyyy)</label>
			<input type= "text" name= "ddate"> <br>
			
			
			<input type= "submit" name="submit" value ="Add New Task"/>
		
		</form>
		<br>
		<br>
		<br>
		<label> List of Tasks</label>
		<table border="1">
		
			<tr>
				<th>Task</th>
				<th>Due Date</th>
				<th>Delete</th>
			</tr>
			
			<?php	
				$taskinfo = mysqli_query($db, "SELECT * FROM tasks");
				while ($data = mysqli_fetch_assoc($taskinfo))
				{
					?>
						<tr>
							<td><?php echo $data['task']; ?></td>
							<td><?php echo $data['ddate'];?></td>
							<td><a href= "test.php?deletetask=<?php echo $data['taskid'];?>">Delete</a></td>
						</tr>
				<?php
				}
			?>
	
		</table>
</body>
</html>
