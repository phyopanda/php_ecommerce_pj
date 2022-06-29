<!DOCTYPE html>
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

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style2.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	
<script>
	function name()
	{
		var name=/^[a-zA-Z]{3,15}$/;
		if(document.f1.f.value.search(name)==-1)
		{
			alert("Your name must be alphabet!");
			document.f1.nm.focus();
			return false;
		}
	}  
	function email()
	{
		var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
		if(document.f1.eid.value.search(email)==-1)
		{
			alert("Please enter valid email! Like 'example@gmail.com'");
			document.f1.em.focus();
			return false;
		}
	} 
	function pass()
	{
		var pass=/^[a-zA-Z0-9-_]{6,16}$/;
		if(document.f1.pw.value.search(pass)==-1)
		{
			alert("Your password should be alphabet with numbers.");
			document.f1.pwd.focus();
			return false;
		}
	}
	function phone()
	{
		var phn=/^[0-9]{9,14}$/;
		if(document.f1.phno.value.search(phn)==-1)
		{
			alert("Invalid phone number! Please enter correct phone number.");
			document.f1.phno.focus();
			return false;
		}
	}
	
	function vali()
	{
		var name=/^[a-zA-Z]{3,15}$/;
		var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
		var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var phn=/^[0-9]{9,14}$/;
		if((document.f1.nm.value.search(name)==-1)||(document.f1.nm.value==""))
		{
			alert("Please check your name field!");
			document.f1.nm.focus();
			return false;
		}
		else if((document.f1.phno.value.search(phn)==-1)||(document.f1.phno.value==""))
		{
			alert("Please check your phone number!");
			document.f1.phno.focus();
			return false;
		}
		else if((document.f1.em.value.search(email)==-1)||(document.f1.em.value==""))
		{
			alert("Please check your email!");
			document.f1.em.focus();
			return false;
		}
		else if((document.f1.pw.value.search(pass)==-1)||(document.f1.pw.value==""))
		{
			alert("Please check your password!");
			document.f1.pw.focus();
			return false;
		}
		else if(document.f1.city.value=="")
		{
			alert("Please fill your city");
			document.f1.city.focus();
			return false;
		}
		else if(document.f1.tsp.value=="")
		{
			alert("Please fill your township");
			document.f1.tsp.focus();
			return false;
		}
		else 
		{
			return true;
		}
	}
</script>
</head>

<body>
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
						<li class="nav-item "><a class="nav-link " href="index.php">Home</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="nav-link" href="food.php">Menu</a></li>&nbsp;&nbsp;		
						<li class="nav-item dropdown">
							<a class="active dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item hvr-radial-in" href="employee.php"><img class="menu-logo" src="images/employee.png">Employee</a>		
								<a class="dropdown-item hvr-radial-in" href="gallery.php"><img class="menu-logo" src="images/gallery.png">Gallery</a>
								<a class="dropdown-item hvr-radial-in1" href="register.php"><img class="menu-logo" src="images/register2.png">Register</a>
							</div>
						</li>&nbsp;&nbsp;		
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>&nbsp;&nbsp;
						<li class="nav-item hvr-buzz"><a  href="register.php"><img class="register" src="images/register.png"></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
				<h2>&nbsp;</h2>
				<center>
                    <video autoplay muted loop id="myVideo">
								<source src="images/menu.mp4" type="video/mp4">
								Your browser does not support HTML5 video.
							</video>
							</center>
							<h2 class="title"> Registration Form <i class="fa fa-clipboard" style="font-size:36px;"></i></h2></img>
                </div>
				<?php
	error_reporting(1);
	
	include("connection.php");
	
	$name=$_REQUEST['nm'];
	$eid=$_REQUEST['em'];
	$ph=$_REQUEST['phno'];
	$pass=$_REQUEST['pw'];
	$age=$_REQUEST['age'];
	$gen=$_REQUEST['r1'];
	$city=$_REQUEST['city'];
	$tsp=$_REQUEST['tsp'];
	$coun=$_REQUEST['coun'];
	$noti=$_REQUEST['r2'];
	if(isset($_REQUEST['reg']))
	{
		$sql=mysql_query("SELECT * FROM register WHERE email='$eid' ");
		$arr=mysql_fetch_array($sql);
		if($arr['email']!=$eid)
		{
			if(mysql_query("INSERT INTO register VALUES('','$name','$eid','$ph','$pass','$age','$gen','$city','$tsp','$coun','$noti')"))
			{
	      		echo "<script>location.href='registerss.php?name=$name & pass=$pass & wel=$eid'</script>";
			}
		}
		else 
		{
?>
		<marquee class="marquee-php">"sorry,User already exists,Please Register with another Email"</marquee>
<?php		
	}
}
?>
                <div class="card-body">
                    <form method="POST" name="f1" onsubmit="return vali()">
                        <div class="form-row m-b-55">
                            <div class="name nmrg">Name</div>
                            <div class="value">
                                <div class="row ">
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" onchange="return name()" placeholder="Name" name="nm" required>
                                            
                                        </div>
                                    </div>
								<div class="name"> Phone </div>
							
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" onchange="return phone()" placeholder="Phone" name="phno" required>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="row ">
                                    <div class="col-7">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" onchange="return email()" placeholder="Email" name="em" required>
                                            
                                        </div>
                                    </div>
								<div class="name">Your Age</div>
							
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" placeholder="Age" name="age" required>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="row ">
                                    <div class="col-7">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" onchange="return pass()" placeholder="Password" name="pw" required>
                                            
                                        </div>
                                    </div>
                                    <div class="p-t-15">
										<label class="radio-container m-r-55">Male
											<input type="radio"  value="male" required name="r1">
											<span class="checkmark"></span>
										</label>
										<label class="radio-container">Female
											<input type="radio" value="female" name="r1">
											<span class="checkmark"></span>
										</label>
									</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="row ">
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" placeholder="City" name="city" required>
                                            
                                        </div>
                                    </div>
								<div class="name">Township</div>
							
                                    <div class="col-5">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" placeholder="Township" name="tsp" required>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Country</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="coun" >
                                            <option disabled="disabled" selected="selected" required>Choose country</option>
                                            <option>United Kingdom</option>
											<option>United States</option>
											<option>China</option>
											<option>India</option>
											<option>Indonesia</option>
											<option>Pakistan</option>
											<option>Brazil</option>
											<option>Japan</option>
											<option>Philippines</option>
											<option>Germany</option>
											<option>Thailand</option>
											<option>Myanmar</option>
											<option>South Korea</option>
											<option>Nepal</option>
											<option>North Korea</option>
											<option>France</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Would you like us to send you email notification of special sales?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" required value="yes" name="r2">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio"  value="no" name="r2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red hvr-float-shadow" name="reg" type="submit">Register</button>
							<img src="images/registerbg2.gif"></img>
                        </div>
                    </form>
                </div>
            </div>
        </div>
		<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead"><a href="tel:+959262253433">+959-262253433</a>							
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							<a href="mailto:phyominhein2004@gmail.com">phyominhein2004@gmail.com</a>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							<a href="https://mapcarta.com/34653902">Bahan Township, Yangon</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Oishii have recently taken a leaf out of Verbâ€™s playbook and integrated their subscription model with SMS.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit hvr-sink">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">No.(17) Dharma Parla Street
									Bahan Township,
									Yangon</p>
					<p class="lead"><a href="tel:+959262253433">+959-262253433</a><p>
					<p><a href="mailto:phyominhein2004@gmail.com">phyominhein2004@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2022 <a href="register.html">Oishii food delivery & Restaurant</a> Design By : 
					<a href="https://pagemyanmar.com">Pagemyanmar Student</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->