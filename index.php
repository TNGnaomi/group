<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<center><table align="center"><tr><td>
	<form action="" method="POST"><center>
		<h1>Employee Registration Form</h1>
		</center>
		Name:<br>
		<input type="text" name="Name" size="20"><br>
		Email:<br>
		<input type="Email" name="Email" size="20"><br>
		Department:<br>
       <select>
       	<option>IT</option>
       	<option>HR</option>
       	<option>Finance</option>
       	<option>Marketing</option>
       </select><br>
       Salary:<br>
      <input type="text" name="Salary" size="20"><br><br>
       <input type="submit" name="Register" value="Register">
	</form>
</td></tr></table></center>
    <?php
    include 'connect.php';
if (isset($_POST['Register'])) {
	$a=$_POST['Name'];
	$b=$_POST['Email'];
	$c=$_POST['Department'];
	$d=$_POST['Salary'];

	$sql="INSERT INTO `empdetails`(`Name`, `Email`, `Department`, `Salary`) VALUES ('$a','$b','$c','$d')";
	$result=mysqli_query($conn,$sql);

}
    ?>

    <form method="POST">
		<table>
			<?php
			include'connect.php';
			$id=$_GET['id'];
			$name=$_POST['Name'];
			$email=$_POST['Email'];
			$depart=$_POST['Department'];
			$salary=$_POST['Salary'];
          $sql="SELECT * FROM empdetails WHERE id=$id";
          $query=mysqli_query($conn,$sql);
          while ($fet=mysqli_fetch_assoc($query)) {
          	?>
          <tr><td>Name</td><td><input type="text" name="Name" value="<?=$fet['Name'];?>" placeholder="Enter your Name"></td></tr>
          <tr><td>Email</td><td><input type="text" name="Email" value="<?=$fet['Email'];?>" placeholder="Enter your Email"></td></tr>
          <tr><td>Department</td><td><input type="text" name="Department" value="<?=$fet['Department'];?>" placeholder="Enter your Department"></td></tr>
          <tr><td>Salary</td><td><input type="text" name="Salary" value="<?=$fet['Salary'];?>" placeholder="Enter your Salary"></td></tr>
          <tr><td><input type="submit" name="Register" value="send"></td></tr>

          }

      <?php
      if(isset($_POST['send'])){
      	$newname=$_GET['Name'];
      	$newemail=$_GET['Email'];
      	$newdepart=$_GET['Department'];
      	$newsalary=$_GET['Salary'];
      	$sql="UPDATE empdetails SET Name='$newname',Email='$newemail',Department='$newdepart',Salary='$newsalary' WHERE id='$id'";
      	$query=mysqli_query($conn,$sql);

      }
      header("location:select.php")
      ?>
		
		</table>
		
	</form>
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
</body>
</html>










