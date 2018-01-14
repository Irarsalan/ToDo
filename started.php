<?php  
include('test.php');
 ?>
 <br>
		<label> List of All Started Tasks</label>
		<br>
 <table border = "1">
	<tr>
		<th>Task </th>
		<th> Due Date</th>
	</tr>
 
 <?php	
		$started = mysqli_query($db, "SELECT * FROM tasks");
				
			while ($data = mysqli_fetch_assoc($started))
				{
					$statusref = $data['status'];
					?>
						<tr>
							<td><?php if ($statusref == "started") echo $data['task']; ?></td>
							<td><?php if ($statusref == "started") echo $data['ddate']; ?></td>
						</tr>
				<?php
				}
?>
</table>
<br>
<a href= "index.php">Back to Main Page</a>