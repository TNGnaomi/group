<html>
<head>
	<title>Update</title>
	<style>
		body tr td input{
border: 2px;
}
	</style>
</head>
<body><center>
	<?php
	$id=$_GET['up'];
	$conn=mysqli_connect("localhost","root","","employee");
	$sql=mysqli_query($conn,"SELECT * FROM empdetails WHERE id='$id'");
	if($sql==true){
		while ($fet=mysqli_fetch_array($sql)) {
			?>
	 
          <tr><td>Name</td><td><input type="text" name="Name" value="<?php echo $fet['Name'];?>" placeholder="Enter your Name"></td></tr><br><br>
          <tr><td>Email</td><td><input type="text" name="Email" value="<?php echo $fet['Email'];?>" placeholder="Enter your Email"></td></tr><br><br>
          <tr><td>Department<br>
       <select>
       	<option>IT</option>
       	<option>HR</option>
       	<option>Finance</option>
       	<option>Marketing</option>
       </select></tr><br><br>
          <tr><td>Salary</td><td><input type="text" name="Salary" value="<?php echo $fet['Salary'];?>" placeholder="Enter your Salary"></td></tr><br><br>
          <tr><td><input type="submit" name="Register" value="Register"></td></tr>  
		
		</table>
		
	</form>
</body>
<?php
}
}
?>
</html>
