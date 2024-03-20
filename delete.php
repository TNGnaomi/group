<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
	<style>
		body{
			background-image: url(image.png);
			background-repeat: no-repeat;
		}
		td{

			border-radius: 5px;
			background-color: green;
			float: initial;
			padding: 2px;
			border: 1PX;
			bord
		}
		p{
			color:firebrick;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<p>are you sure you want to delete?</p>
			<td><input type="submit" name="Yes" value="Yes"></td>
			<td><input type="submit" name="No" value="No"></td>
		</tr>
	</table>

</body>
</html><?php
$conn=mysqli_connect("localhost","root","","employee");
if(isset($_GET['Yes'])){
// $delete='id';
	$delete=$_GET['del'];
$sql=mysqli_query($conn,"DELETE FROM empdetails WHERE id=$delete");
if($sql==true){
header("location:select.php");
}
}
mysqli_close($conn);
?>


