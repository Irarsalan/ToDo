<?php 
	$db = mysqli_connect("localhost:3307", "root", "1234", "todoapp");//make a connection to database
	
	if (isset($_POST['submit']))//make sure submit button selected
	{
			$task = $_POST['task'];
			$ddate = $_POST['ddate'];
			$status = $_POST['status'];
			$sql = "INSERT INTO tasks (task,ddate,status) VALUES ('$task', '$ddate','$status')";
			mysqli_query($db, $sql);
			header('location: index.php');
	
	}	
	
	if (isset($_GET['deletetask'])) 
	{
		$taskno = $_GET['deletetask'];
		$sql = "DELETE FROM tasks WHERE taskid = '$taskno'"; 
		mysqli_query($db, $sql);
		header ('location: index.php');
	}
	
	?>