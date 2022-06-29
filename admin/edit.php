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
	
	<?php 
error_reporting(1);
mysql_connect("localhost","root","");
mysql_select_db("oishiidb");
$f_img = $_FILES['img']['name'];
$sql=mysql_query("select * from product1 where f_id='{$_GET['pro_id']}'");
$row=mysql_fetch_array($sql);
extract($_POST); 
if($upd)
{
mysql_query("update product1 set f_id='$n',f_type='$p',f_name='$add',f_price='$mob' where f_id='{$_GET['pro_id']}'");
header('location:product.php');
}
?>
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>*_*</h2>
						<h2>*_*</h2>
						<h2>Edit</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
				
				   <center>
						
						<form method="post" enctype="multipart/form-data">
						<table>
							<tr> 
								<img width="200px" src="product_images/<?php echo $row['f_image']; ?>">
							</tr>
							<tr> 
								<Td>Food id</td>
								<td><input type="text" name="n" value="<?php echo $row['f_id'];?>"/></td>
							</tr>
							<tr>
								<Td>Food Type</td>
								<td><select name="p">
									<option  value="<?php echo $row['f_type'];?>"><?php echo $row['f_type'];?></option>
									<?php
									$con=mysqli_connect("localhost","root","","oishiidb"); 
									$get_brand = "SELECT * FROM foodtype";
									$run_brand = mysqli_query($con,$get_brand);
									while($row_brand = mysqli_fetch_array($run_brand))
									{
									$t_id = $row_brand['t_id'];
									$t_title = $row_brand['t_title'];
									echo "<option value='$t_title'>$t_title</a></li>";
									}
									?>
								</select></td>
							</tr>
							<tr>
								<Td>Food Name</td>
								<td><input type="text" name="add" value="<?php echo $row['f_name'];?>"/></td>
							</tr>
							<tr>
								<Td>Food Price</td>
								<td><input type="text" name="mob" value="<?php echo $row['f_price'];?>"/></td>
							</tr>
							<tr>
								<Td colspan="2" align="center">
								<input type="submit" value="Update" name="upd"/>
							</Td>
							</tr>
					</table>
					</form>
				  <center>
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