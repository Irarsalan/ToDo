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
			
			<label> Enter Status: pending, started, done, or late</label>
			<input type = "text" name = "status"> <br>
			
			<input type= "submit" name="submit" value ="Add New Task"/>
		
		</form>
		<br>
		<br>
		<br>
		<label> List of All Tasks</label>
		<br>
		<table border="1">
		
			<tr>
				<th>Task</th>
				<th>Due Date</th>
				<th>Status of Task</th>
				<th>Delete</th>
			</tr>
			
			<?php	
				$taskinfo = mysqli_query($db, "SELECT * FROM tasks");
				$countAll = 0;
				$countPend = 0;
				$countStart = 0;
				$countComp = 0;
				$countLate = 0;
				while ($data = mysqli_fetch_assoc($taskinfo))
				{
					$statusref = $data['status'];
					?>
						<tr>
							<td><?php echo $data['task']; ?></td>
							<td><?php echo $data['ddate'];?></td>
							<td><?php echo $data['status'];?></td>
							<td><a href= "test.php?deletetask=<?php echo $data['taskid'];?>">Delete</a></td>
						</tr>
				<?php
				$countAll++;
				if ($statusref == "pending" || $statusref == NULL)
					{
						$countPend++;
					}
				else if ($statusref == "started")
					{
						$countStart++;
					}
				else if ($statusref == "done")
					{
						$countComp++;
					}	
				else if ($statusref == "late")
					{
						$countLate++;
					}	
				}
				?>
	
		</table>
			<?php 
			echo nl2br ("\n");
			echo nl2br ("Number of Total Tasks: $countAll \n");
			echo nl2br ("\n");
			echo nl2br ("Number of Pending Tasks: $countPend \n");
			echo nl2br ("Number of Started Tasks: $countStart \n");
			echo nl2br ("Number of Completed Tasks: $countComp \n");
			echo nl2br ("Number of Late Tasks: $countLate \n");
			?>
<br>
<a href= "pending.php">See All Pending Tasks</a>
<br>
<a href= "started.php">See All Started Tasks</a>
<br>
<a href= "done.php">See All Completed Tasks</a>
<br>
<a href= "late.php">See All Late Tasks</a>
</body>
</html>
