<?php

$server= "localhost";
$password = "";
$username= "root";
$data= "";

$conn= mysqli_connect($server,$username,$password,$data);

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}


?>
