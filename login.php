<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Oishi Food Delivery</title> 
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style2.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style4.css">


	</head>
	<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-ry">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img class="logo-size hvr-grow-rotate " src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class=" nav-link " href="index.php">Home</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="nav-link" href="food.php">Menu</a></li>&nbsp;&nbsp;		
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item hvr-radial-in" href="employee.php"><img class="menu-logo" src="images/employee.png">Employee</a>		
								<a class="dropdown-item hvr-radial-in" href="gallery.php"><img class="menu-logo" src="images/gallery.png">Gallery</a>
								<a class="dropdown-item hvr-radial-in" href="register.php"><img class="menu-logo" src="images/register2.png">Register</a>
							</div>
						</li>&nbsp;&nbsp;		
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>&nbsp;&nbsp;
						<li class="nav-item hvr-buzz"><a  href="register.php"><img class="register" src="images/register.png"></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				
					<h2 class="heading-section">*_*</h2>
					<h2 class="heading-section">If you want to buy a product you have chosen, please log in with your member account.</h2>
				</div>
			</div>
<?php
	error_reporting(1);

	include("connection.php");
	
	$id = $_REQUEST['buy_pro'];
	
	if(isset($_REQUEST['login']))
	{
		
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['pass'];
		$query = mysql_query("SELECT email,password FROM register WHERE email='$email'");
		$arr = mysql_fetch_array($query);
		if(($arr['email']==$email) && ($arr['password']==$pass))
		{
			echo "<script>location.href='buy.php?buy_pro=$id'</script>";
		
		}
		else 
		{
?>
		<marquee class="marquee-php">"sorry,User already exists,Please Register with another Email"</marquee>
<?php		
	}
}
?>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
				<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
					<form action="#" class="signin-form" method="post">
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="email" required>
			      			<label class="form-control-placeholder"  for="username">Gmail</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" name="pass" class="form-control" required>
		              <label class="form-control-placeholder"  for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="login" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		           
		          </form>
		          <p class="text-center">Not a member? <a  href="register.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  
  <script src="js/main3.js"></script>
<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	</body>
</html>

