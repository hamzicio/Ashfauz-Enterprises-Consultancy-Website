<html class="no-js" lang="en">
	
<head style="position:relative">
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>EXCISE CLUB </title>
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
		</head
        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
           
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
                                        	<li><a class="pagess" href="exciseclub.php" style="color:#e22a31">Excise Club</a>
											</li>
												<li><a class="pagess" href="https://forms.zohopublic.com/directorateexcisetaxationnarco/form/CardForm/formperma/79D3De1Eh7ba_3g79E8MCh9eb">Card Form</a>
											</li>
                                												<li><a class="pagess" href="https://www.ashfauz.com/admin.php">Admin</a>
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
     <div class="container">
        <div class="row">
                        <div class="col-md-12">

                            <div class="mobile-menu">
                               
                                <nav id="dropdown">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="pagess" href="exciseclub.php">Excise Employees Club</a>
											</li>
											<li><a class="pagess" href="admin.php">Admin</a>
											</li>
												<li><a class="pagess" href="https://forms.zohopublic.com/directorateexcisetaxationnarco/form/CardForm/formperma/79D3De1Eh7ba_3g79E8MCh9eb">Card Form</a>
											</li>
                                        </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
        </header>

<div class="intro-area">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/baba3.jpg" alt="" style="max-height:400px">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1-2">
                                                <h1 class="title2"> <span class="color">EXCISE EMPLOYEES CLUB</span></h1>
                                  </div>
                                            <div class="layer-1-3">
                                                <a href="exciseclub.php#frompage" class="ready-btn right-btn" >Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/baba2.jpg" alt="" style="max-height:400px">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";
$conn= mysqli_connect($server,$username,$password,$data);
if($conn)
{
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rpassword']) && isset($_POST['design']) && isset($_POST['phonenum']) && isset($_POST['cnic']))
{
  $namee=$_POST['name'];
  $emaill=$_POST['email'];
  $password=$_POST['password'];
  $rpassword=$_POST['rpassword'];
  $designn=$_POST['design'];
  $phonenumm=$_POST['phonenum'];
  $cnic=$_POST['cnic'];
  if(!empty($namee) && (!empty($emaill)) && (!empty($password)) && (!empty($rpassword)) && (!empty($designn)) && (!empty($phonenumm)) && (!empty($cnic)))
  {
      
      if($rpassword==$password)
      {
    
      $query="INSERT INTO members (name,email,password,designation,phonenum,cnic) VALUES ('$namee','$emaill','$password','$designn','$phonenumm','$cnic')";
      $que=mysqli_query($conn,$query);
      if($que) 
      {
      
      $msg = "Thankyou for Registering with us.You will be notified once your profile is activated.\n The following response was recorded:\n Name : $namee\n Designation : $designn\n CNIC : $cnic\n Phone Number : $phonenumm\n";
      $msg = wordwrap($msg,70);
      mail($emaill,"EXCISE CLUB REGISTERATION",$msg);
  
      header('Location:registersuccess.php');
      }
      else
      {
        echo mysql_errno($que);
      }
  }
  else
  {
      echo '<script>alert("Passwords dont match");</script>';
     echo '<script>
     window.location.href = "https://www.ashfauz.com/exciseclub.php";
     </script>';
  }
}
}
}
?>

<html>
<body>
    <br><br><br><br><br><br><br>
<center><h style="font-weight: bold; font-size :30px; font-color:black">Thankyou For Registering With Us</h></center><br><br>
<center><p style="font-size:20px">You will be notified once your profile has been activated</p>
<br></center>
<center><p style="font-size:20px">A copy of your response will be mailed to you</p></center>
<br><br><br><br><br>

<?php>
include 'scripts.php';
include 'footer.php';

?>

