<?php

require "conn.php";

session_start();

$_SESSION["friend_id"] = $_GET["id"];

echo "<script>window.location.href='https://www.ashfauz.com/test.php';</script>"; 

?>