<!DOCTYPE html>

<html>

<?php
session_start();

if(isset($_SESSION["id"])){
    
}else{
    echo "<script>window.location.href='https://www.ashfauz.com/exciseclub.php'</script>";
}

?>

<head>
<style type="text/css">

body
{
	font-family: 'Oxygen', sans-serif;
font-family: 'Libre Franklin', sans-serif;
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	.shaikh tr th td
	{
		display: none;
		color: red;
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Name"; }
	td:nth-of-type(2):before { content: "Phone"; }
	td:nth-of-type(3):before { content: "Email"; }
	td:nth-of-type(4):before { content: "Designation"; }
	td:nth-of-type(5):before { content: "Photo"; }

}

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 20px;
  color: #00664d;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 15px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
}
section{
  margin: 50px;
}




/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
		

	</style>

<title>Excise Directory</title>

<!-- Including jQuery is required. -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- Including our scripting file. -->

<script type="text/javascript" src="scriptt.js"></script>

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin|Oxygen" rel="stylesheet">



<!-- Including CSS file. -->



</head>



<body>

<!-- Search box. -->
   <center><h style="font-size: 30px;font-weight: 400">Excise Telephone Directory</h></center>
   <a href="https://www.ashfauz.com/loginsuccess.php" class="btn btn-primary" style="float:right">Back to Site</a>

<input type="text" id="search" placeholder="       Search By Name" name="search" style="float: left ; margin: 30px; height:30px; border-radius: 20px">

<br>
<br />

<!-- Suggestions will be displayed in below div. -->

<div id="display"></div>
<div id="hider">
<?php
include 'db.php';
$query = "SELECT name,phone,email,image,designation FROM search";
  print "<table> ";
$result=mysqli_query($con, $query);
  //return only the first row (we only need field names)
if (mysqli_num_rows($result) > 0) {
 
    // output data of each row
       echo '<div class="shaikh">';
       echo  "<tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Photo</th>
                </tr>" ;
         echo '</div>';

while($row = mysqli_fetch_assoc($result)) {
  {

         
                    echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['designation']."</td>
                    <td>";
                    echo '<img src="data:image/png;base64,'.base64_encode($row['image']).' "height=30" width="30" />';

                    echo "</td></tr>";
                  
                        
       
  }
}
}
?>;
</div>


</body>
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
		
</html>