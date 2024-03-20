<?php
SESSION_start();
if(isset( $_POST ['Register'])){
    $name=$_POST ['Name'];
    $email=$_POST ['Email'];
    $depart=$_POST ['Department'];
    $salary=$_POST ['Salary' ];
    $conn=mysqli_connect ("localhost","root","","employee" );
    $query=mysqli_query($conn,"SELECT FROM empdetails WHERE Name='$a',Email=$b ,Department=$c, Salary=$d");
    $fet=mysqli_fetch_array($query);
    if(is_array($fet)){
        $_SESSION ['Name']=$fet ['Name'];
        $_SESSION ['Email']=$fet ['Email'];
        $_SESSION ['Depqrtment']=$fet ['Department'];
        $_SESSION [ 'Salary']=$fet ['Salary'];
        if( $_SESSION==true );
            header ("location:index.php" ); 
        }
    }
    else{
        echo" login fail try again";
    }
    ?>