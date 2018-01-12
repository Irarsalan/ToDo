<?php 
	$db = mysqli_connect("localhost:3307", "root", "1234", "todoapp");//make a connection to database
	
	if (isset($_POST['submit'])) //check to make sure 
	{
		
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
	
	}	
	?>