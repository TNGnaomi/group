<?php
$conn=mysqli_connect("localhost","root","","employee");
$sql="INSERT INTO empdetails(Name,Email,Department,Salary) VALUES($name,$Email,$Department,$salary);
 $res=mysqli_query($conn,$sql);
 if ($res==true) {
echo "inserted successfully 🎁";
}
	else{
		echo "inserted not successfull😘";
		}


?>