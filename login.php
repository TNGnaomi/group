<php
session_start();
include="connection.php";
if(isset($_POST['login'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $depart=$_POST['Department'];
    $salary=$_POST['Salary'];
    $query="SELECT * FROM empdetails WHERE Name=$a,Email=$b,Department=$c,
    Salary=$d";
    $result=$conn ->query($query);
    if($result==false){
        $error="error:".$conn->error;
    }
if($result->num->raws>0){
    $row=$result->fetch-assoc();
    $session=['Name']=$row['Name'];
    $session=['Email']=$row['Email'];
    $session=['Department']=$row['Department'];
    $session=['Salary']=$row['Salary'];
    header="location:register.php";
}
else{
    error='invalid Name Email Department Salary';
    die($error);
}
}

?>