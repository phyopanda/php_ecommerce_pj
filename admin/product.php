<!DOCTYPE html>
<html lang="en"><!-- Basic -->
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
    <link rel="stylesheet" href="css/style.css">    
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
				<a class="navbar-brand" href="home.php">
					<img class="logo-size hvr-grow-rotate " src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="home.php">Home</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="nav-link" href="insert.php">Insert</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="active" href="product.php">Product</a></li>&nbsp;&nbsp;		
						<li class="nav-item"><a class="nav-link" href="order.php">Orders</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>&nbsp;&nbsp;
						<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>&nbsp;&nbsp;
						<li class="nav-item hvr-pulse-shrink "><a  href="index.php"><img class="register" src="images/register.png"></a></li>
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
					<h1>Product</h1>
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
						<h2>product<img src="images/insert2.webp"></h2>
						
					</div>
				</div>
			</div>
			<center>
			 <?php
				error_reporting(1);
	
				include("connection.php");
	
				$view = "SELECT * FROM product1";
				$result = mysqli_query($con, $view);
				
				echo "<table border='1' cellspacing='0' cellpadding='5px'>";
				echo "<tr>
						  <th>Product id</th>
					  	  <th>Product brands</th>
					  	  <th>Product model</th>
					  	  <th>Product price</th>
					  	  <th>Product image</th>
						  <th>Edit</th>
						  <th>Delete</th>
					
					  </tr>
					 ";
				
				while(list($p_id, $p_brands, $p_model, $p_price, $p_img, $p_desc) = mysqli_fetch_array($result))
				{
					echo "<tr align='center'>";
					echo "<td>". $p_id ."</td>";
					echo "<td>". $p_brands ."</td>";
					echo "<td>". $p_model ."</td>";
					echo "<td>". $p_price ."</td>";
					echo "<td>"."<img src='product_images/$p_img' width='75px' height='40px'"."</td>";
					echo "<td>"."<a href='edit.php?pro_id=$p_id & pro_img=$p_img'>Edit</a>"."</td>";
					
					echo "<td>"."<a href='delete.php?pro_id=$p_id & pro_img=$p_img'>Delete</a>"."</td>";
				    echo "</tr>";
				}
				echo "</table>";
		  ?>
		  </center>
		</div>
	</div>
	<!-- End Stuff -->
	
	
	<!-- Start Footer -->
	<footer>
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