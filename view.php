<?php

require "conn.php";

session_start();


if(isset($_POST["update"]))
{
	$name = $_FILES["url"]["name"];
        $tmp_name = $_FILES["url"]["tmp_name"];
	$target = "img/".$name;
	move_uploaded_file($tmp_name,$target);
	
	if(mysqli_query($conn,"UPDATE members SET `url` = '$target' WHERE `id` = '$id'"))
	{
		echo "<script>alert('profile picture updated!');</script>";
	}
	else{
		echo "<script>alert('failed to upload the picture');</script>";
	}
}

?>


<?php
if($_SESSION["set"]!=1)
{
    echo "<script>window.location.href='https://www.ashfauz.com'</script>";
}
?>


<!doctype html>
<html class="no-js" lang="en">

<head style="position:relative">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>EXCISE CLUB</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon1.png">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs changer">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#" style="font-size:16px"><i class="fa fa-envelope"></i> info@ashfauz.com</a></li>
                                    <li><a href="#" style="font-size:16px"><i class="fa fa-phone"></i> +92 333-2184070</a></li>
                                       <li><a href="#" style="font-size:16px"><i class="fa fa-phone"></i>+92 343-32481831 </a></li>
                           
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <ul>
										<li><a href="#"><i class="fa fa-skype"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="#"><i class="fa fa-google"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/excise.club"><i class="fa fa-facebook"></i></a></li>
									</ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
    
                            <div id="sticker" class="header-area hidden-xs changer">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                   
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <nav class="navbar navbar-default" style="float:left">
                                <div class="collapse navbar-collapse">
                                    <div class="main-menu">
                                       <ul class="nav navbar-nav ">
                                        	 <li><a class="pagess" style="font-size: 20px; color:#e22a31">Welcome <?php echo $_SESSION['name']; ?></a>
											</li>
												<li><a class="pagess" href="https://www.ashfauz.com/directory.php">Directory</a>
											</li>
											<li><a class="pagess" href="https://www.ashfauz.com/chalja">Chat</a></li>
                                												<li><a class="pagess" href="logout.php">Log Out</a>
											</li>
											
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                 
                        </div>
                    </div>
                </div>
            </div>


 <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="row">
                <a class="navbar-brand page-scroll sticky-logo">
                <img src="img/logo/logo2.png" alt="" >
                </a>
                <div class="container">
                 
                        <div class="col-md-12">

                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="nav navbar-nav navbar-right">
                                        	 <li><a class="pagess"style="color:#e22a31">Welcome <?php echo $_SESSION['name']; ?></a>
											</li>
											<li><a class="pagess" href="https://www.ashfauz.com/directory.php">Directory</a>
											</li>
											  <li><a class="pagess" href="https://www.ashfauz.com/chalja">Chat</a></li>
                                												<li><a class="pagess" href="logout.php">Log Out</a>
											</li>
											
                                        </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
 
	<head>
 
	


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
<div class="row">
     <div class="well">
<div class="row">
   
  <div class="col-lg-10">
    Search: <input type='text' name='search' id='search' placeholder='Search by name'>

		<div id='result'></div>

    </div>

    <div class="col-lg-2">
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Settings
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="https://www.ashfauz.com/profile.php">Profile</a></li>
      <li><a href="https://www.ashfauz.com/loginsuccess.php">Document</a></li>    </ul>
  </div>
        </div>  
  
     </div>
     </div>
    <div class="col-lg-4 ">
<h2 style="text-align:center">User Profile Card</h2>

<?php


$id = $_GET["find"];

if($first =mysqli_query($conn,"SELECT * FROM members WHERE id='$id'"))
{

}
else
{
    echo "<script>alert('Not work');</script>";
}

$row = mysqli_fetch_assoc($first);

  $name = $row["name"];
  $email = $row["email"];
 $des = $row["designation"];
 $url = $row["url"];

echo '
<div class="row">
<div class="card">
    
    
    
  <img src="'.$url.'" style="width:100%;height:250px;">

</br>
  <h3>'.$name.'</h3>
  <p class="title">'.$email.'</p>
  <p>'.$des.'</p>

</div>
</div>';

?>
</div>
</div>
</body>
</html>


<footer>
            <div class="footer-area-bottom" style="margin-bottom:0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2018
                                    <a style="font-size:15px" href="https://web.facebook.com/hamza.shaikh97">Hamza Shaikh & </a><a style="font-size:15px" href="https://web.facebook.com/lukshkumar97">Luksh Kumar</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- jquery latest version -->
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
		
		
		
<script>

$(document).ready(function()
{
	$("#search").keyup(function()
	{
		 var val = $(this).val();

		
		$.ajax({
			
		method:'GET',
		url:'https://www.ashfauz.com/search.php',
		data:{search:val},
		success:function(data)
		{
				
			$("#result").html(data);
			
		}
		
		});
		
	})
})


</script>