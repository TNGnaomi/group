<?php
	include'connect.php';
	if (isset($_POST['Register'])) {
	$a=$_POST['Name'];
	$b=$_POST['Email'];
	$c=$_POST['Department'];
	$d=$_POST['Salary'];
$sql="UPDATE `empdetails` SET `id`='[value-1]',`Name`='$a',`Email`='$b',`Department`='$c',`Salary`='$d' WHERE id='$id'";
if(mysqli_query($conn,$sql)){
	echo"Data has updated successfully";
}
}
?>