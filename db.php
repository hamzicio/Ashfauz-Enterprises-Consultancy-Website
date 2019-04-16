<?php
 
 
//Database connection.
 
$con = MySQLi_connect(
 
   "localhost", //Server host name.
 
   "ashfauz_admin", //Database username.
 
   "AO0DJXZIHEJE", //Database password.
 
   "ashfauz_members" //Database name or anything you would like to call it.
 
);
 
 
 
//Check connection
 
if (MySQLi_connect_errno()) {
 
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
 
}
 
?>