<?php

require "conn.php";
session_start();

if(isset($_GET["search"]))
{
	$q = $_GET["search"];
	
	if($q!='')
	{
	if($result = mysqli_query($conn,"SELECT * FROM members WHERE `name` LIKE '%".$q."%'"))
	{
		while($row = mysqli_fetch_assoc($result))
		{	
		
			echo "<a href='https://www.ashfauz.com/view.php?find=".$row["id"]."'>".$row["name"]."</br></a>";
			
		}
	}
	else
	{
		echo "Query Failed";
	}
	}
	
}

?>