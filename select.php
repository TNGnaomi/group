<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select</title>
	<style>
		th{
			background-color: blue;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr><th>Name</th>
		<th>Email</th>
	    <th>Department</th>
        <th>Salary</th>
        <th>Action</th>
        </tr>
	<?php
	$conn=mysqli_connect("localhost","root","","employee");
	$sql=mysqli_query($conn,"SELECT * FROM empdetails");
	if($sql==true){
		while ($fet=mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $fet['Name'];?></td>
				<td><?php echo $fet['Email'];?></td>
				<td><?php echo $fet['Department'];?></td>
				<td><?php echo $fet['Salary'];?></td>
				<td><a href="delete.php ? del=<?php echo $fet['id'];?>">Delete</a>
				<a href="update.php ? up=<?php echo $fet['id'];?>">Edit</a></td>
				<?php
						}
	              }
	              mysqli_fetch_array($sql);
	            ?>
                 
			</tr>

	</table>


</body>
</html>