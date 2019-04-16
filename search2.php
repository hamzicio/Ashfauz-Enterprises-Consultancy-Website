<?php

require "conn.php";
session_start();

if(isset($_GET["search"]))
{
	$q = $_GET["search"];
	
	if($q!='')
	{
	if($result = mysqli_query($conn,"SELECT * FROM data WHERE `title` LIKE '%".$q."%'"))
	{
		while($row = mysqli_fetch_assoc($result))
		{	
			$_SESSION["preview2"] = $row["id"];
			echo "<a href='view2.php'>".$row["title"]."</br></a>";
			
		}
	}
	else
	{
		echo "Query Failed";
	}
	}
	
}

?>