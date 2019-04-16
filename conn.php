<?php

$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";

$conn= mysqli_connect($server,$username,$password,$data);

if(mysqli_connect_errno())
{
    echo "<script>alert('Not connected to DataBase!');</script>";
}


?>