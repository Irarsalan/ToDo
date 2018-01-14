<?php  
include('test.php');
 ?>
 <br>
		<label> List of All Late Tasks</label>
		<br>
 <table border = "1">
	<tr>
		<th>Task </th>
		<th> Due Date</th>
	</tr>
 
 <?php	
		$late = mysqli_query($db, "SELECT * FROM tasks");
				
			while ($data = mysqli_fetch_assoc($late))
				{
					$statusref = $data['status'];
					?>
						<tr>
							<td><?php if ($statusref == "late") echo $data['task']; ?></td>
							<td><?php if ($statusref == "late") echo $data['ddate']; ?></td>
						</tr>
				<?php
				}
?>
</table>
<br>
<a href= "index.php">Back to Main Page</a>