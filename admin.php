<!doctype html>
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
                                <div class="logo">
                                    <a href="#"><img src="img/logo/logo2.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                        <ul>
                                        	<li><a class="pagess" href="exciseclub.php" style="color:#e22a31">Excise Club</a>
										</li>
										<li><a class="pagess" href="https://forms.zohopublic.com/directorateexcisetaxationnarco/form/CardForm/formperma/79D3De1Eh7ba_3g79E8MCh9eb">Card Form</a>
										</li>
										<li><a class="pagess" href="https://www.ashfauz.com/admin.php">Admin</a>
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
                                                <h1 class="title2"> <br><span class="color">EXCISE EMPLOYEES CLUB</span></h1>
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

require "conn.php";

session_start();



if(isset($_POST["login"]))
{
    $pass = $_POST["password"];
    $user = $_POST["user"];

    
    $first = mysqli_query($conn,"SELECT * FROM admin WHERE `username` = '$user' AND `password` = '$pass'");
    $num = mysqli_num_rows($first);
    if($num == 1)
    {
        $_SESSION["set"] = 1;
        $_SESSION["id"] = 66;
        echo "<script>alert('Logged In successfully!');</script>";
        echo "<script>window.location.href='admin/pages/tables.php'</script>";
    }
    else
    {
        echo "<script>alert('Incorrect Username or Password!');</script>";
    }
    
}


?>


<div class="jumbroton" id="excise">
     
	<div class="quote-area area-padding parallax-bg">
            <div class="container">
               <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-lg-offset-3 ">
                <p style="margin-left:auto;text-align: center;font-size: 40px;font-weight: bold; color: white;text-transform: uppercase;"><br>LOGIN</p>
                <form action="#" method="POST">	
	
        <div class="form-group has-feedback">
        <label class="control-label">Username</label>
                <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
		<input type="text" class="form-control" placeholder="admin" style="margin-bottom: 30px;" name="user" type="text" required="" data-validation-required-message="Please enter your 8 digit P.N0" aria-invalid="true"/>
        </div>
		
		<div class="form-group has-feedback">
        <label class="control-label">Password</label>
        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
		<input type="password" class="form-control" placeholder="Password123" style="margin-bottom: 30px;" name="password" type="email" required="" data-validation-required-message="Please enter your password." aria-invalid="true"/>
		<a href="forgotpass.php"><u>Forgot your password?</u></a>
        
        </div>
        
        <div style="text-align: center;"><input type="submit" value="LOGIN" name="login" class="btn  btn-lg" style="background-color:#e22a31;  color: white;"></div>
        <br><br><br>
        
	</form>
</div>

</div>

</div>

</div>

</div>


<?php

include 'footer.php';
?>
<?php

include 'scripts.php';
?>