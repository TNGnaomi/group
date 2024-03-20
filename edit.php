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
    