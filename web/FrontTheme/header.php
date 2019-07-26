<?php
session_start();
include_once("../php/config.php");
$cOnfigObj = new Config();
?>


<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Deliva</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Career Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-css-->
<link href="css/font-awesome.css" rel="stylesheet"> <!--font-awesome-css-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /><!--flexslider-css-->
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" /><!--skill-circles-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--style-sheet-->
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" /><!--Animation-effects-css-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Cabin:400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<!--//fonts-->

</head>
<body>
	<!--banner start here-->
<div class="banner" id="home">
<div class="agileinfo-dot">
   <div class="header">
<div class="header-main">
			 <div class="header-top-agileits">
		   	 <div class="container">
				<div class="w3l-social" data-aos="fade-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<ul class="agile_forms" data-aos="fade-left">
					<?php if(isset($_SESSION['MyUser'])){
						?>
						<li><a class="active loginAnchor" href="../UserPanel/MyDashboard.php"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['MyUser']?></a> </li>
					<?php
					}else{
						?>						
					<li><a class="active loginAnchor" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> </li>
					<?php
					}//else
					?>
					<li><a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a> </li>
				</ul>
				<div class="clearfix"> </div>
				</div>
			</div>
			 <div class="container" style="background: grey;">
			<nav class="navbar navbar-default" >
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="home.php">Deliva</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse cl-effect-13" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="#" class="scroll">How to Invest</a></li>
							<li><a href="#" class="scroll">Profit</a></li>
							<li><a href="#services" class="scroll">Investment</a></li>
							<li><a href="#team" class="scroll">Profit</a></li>
							<li><a href="#gallery" class="scroll">Explore</a></li>
							
						</ul>

					</div>

					<div class="w3ls_search">
													<div class="cd-main-header">
														<ul class="cd-header-buttons">
															<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
														</ul> <!-- cd-header-buttons -->
													</div>
													<div id="cd-search" class="cd-search">
														<form action="#" method="post">
															<input name="Search" type="search" placeholder="Click enter after typing">
														</form>
													</div>
												</div>
					

					<div class="clearfix"> </div>	
				</nav>
		   </div>
		   </div>


		   <div class="container">
		   <div class="banner-bottom">
		   	   <section class="slider">
				 <div class="flexslider">
					<ul class="slides">
					  <li>
					  	<div class="banner-bottom-text">
					  			<h3>Wellcome To  Deliva Invesment</h3>
						  <br> <p class="color">
							We are expert in cryptocurrencies and sharing our Experience to the world</p>
					 	</div>
					  </li>
					  <li>
					  	<div class="banner-bottom-text">
							  <h3>OUR VISION</h3>
							  <br>
							  <p class="color">To achieve ultimate Financial Freedom for Everyone</p>
					 	</div>
					  </li>
					  <li>
					  	<div class="banner-bottom-text">
								  <h3>OUR MISSION</h3>
								  <br>
								  <p class="color">To reach out to everyone with Love and Sincerity</p>
						  
					 	</div>
					    
				    </ul>
				 </div>
				 <div class="clearfix"> </div>
		      </section>
			<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-chevron-down" aria-hidden="true"></i>
				</a>
			</div>
			
		   </div>
		</div>
	</div>
</div>
</div>

<br></br>
<?php if(!isset($_SESSION['MyUser'])){
	?>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Login</h3>	
																			<div class="login-form">
																				<form action="../php/login.php" method="post">
																					<input type="email" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp">
																						<input type="submit" name="submitLogin" value="Login">
																					</div>
																				</form>
																			</div>
																			
																			<p><a href="register.php"> Don't have an account?</a></p>
																			<p><a href="#" data-toggle="modal" data-target="#myForgotPassModal" aria-hidden="true"> forgot password?</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div>

	<?php
	}//if end
	?>
	<!-- Modal2 -->
	

<div class="modal fade" id="myForgotPassModal" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Forgot Password</h3>	
																			<div class="login-form">
																				<form action="../php/forgotPassword.php" method="post">
																					<input type="email" name="email" placeholder="E-mail" required="">
																					<input type="hidden" name="token" id="token">
																					<div class="tp">
																						<input type="submit" name="submitForgotEmail" value="Submit">
																					</div>
																				</form>
																			</div>
																			
																		</div>
																</div>
															</div>
														</div>
													</div>




													<!-- //Modal2 -->	
													<!-- Modal3 -->
												<!-- 	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog"> -->
														<!-- Modal content-->
													<!-- 		<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Register</h3>	
																			<div class="login-form">
																				<form action="#" method="post">
																				   <input type="text" name="name" placeholder="Username" required="">
																					<input type="email" name="email" placeholder="Email" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<input type="password" name="password" placeholder="Confirm Password" required="">
																					<input type="submit" value="Register">
																				</form>
																			</div>
																			<p><a href="#"> By clicking register, I agree to your terms</a></p>
																		</div>
																</div>
															</div>
														</div>
													</div> -->
													
		<!-- //Modal3 -->
}
<?php

if(isset($_POST['submitLogin'])){
$email = $_POST['email'];
$password =  $_POST['password'];


}


?>