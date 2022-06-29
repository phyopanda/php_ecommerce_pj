<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Buy</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Buy</h2>
						<p>We have one hundred employees and a turnover of around $450,000.</p>
					</div>
				</div>
			</div>
			
<?php
	error_reporting(1);
	include("connection.php");
	$product_brand = $_REQUEST['buy_pro'];
	
	if(isset($_REQUEST['buy']))
	{
		$t = $_REQUEST['t'];
		$n = $_REQUEST['n'];
		$p = $_REQUEST['p'];
		$phno = $_REQUEST['phno'];
		$delivery = $_REQUEST['r'];
		$add = $_REQUEST['add'];
		$order_no = no.rand(1,100);

		if(mysql_query("INSERT INTO buy VALUES('','$t','$n','$p','$phno','$delivery','$add','$order_no')"))
		{
			echo "<script>location.href='buyss.php?order_no=$order_no'</script>";
		}
		else
		{
			echo "is not ok";
		}
	}
?>
			<center>
			<?php
				$sel=mysql_query("select * from product1 where f_id='$product_brand'");
				$mat=mysql_fetch_array($sel);
			?>
			<img width="300px" src="admin/product_images/<?php echo $mat['f_image']; ?>">
			
			<form method="post">
				<table border="0" cellpadding="10px">
				<tr>
					<td>Type</td>
					<td><input type="text" name="t" readonly value="<?php echo $mat['f_type']; ?>"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="n" readonly value="<?php echo $mat['f_name']; ?>"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="p" readonly value="<?php echo $mat['f_price']; ?>"></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="phno" required></td>
				</tr>
				<tr>
					<td>Preferred Delivery</td>
					<td><input type="radio" name="r" value="15 min" required>15 min,
					    <input type="radio" name="r" value="30 min" required>30 min,
						<input type="radio" name="r" value="1 hr" required>1 hr,
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea name="add" required></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
								<input type="submit" name="buy" value="Buy"> &nbsp;
					                
					</td>
				</tr>
				</table>
		</form>
		</center>
		</div>
	</div>
	<!-- End Stuff -->
	
	<!-- Start Footer -->
	<footer>
		<div class="container">
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
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

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