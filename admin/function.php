<?php
	
	$con = mysqli_connect("localhost","root","","oishiidb");

	//getting the brands from brands table.
	function getBrands()
	{
		global $con;
		$get_brand = "SELECT * FROM foodtype";
		$run_brand = mysqli_query($con,$get_brand);
		while($row_brand = mysqli_fetch_array($run_brand))
		{
			$b_id = $row_brand['t_id'];
			$b_title = $row_brand['t_title'];
			echo "<a href='food.php?brand=$b_title'><button type='button' class='btn btn-outline-primary'><img class='menu-logo' src='images/$b_title.png'>$b_title</button></a>";
		}
	}

	//getting the products from product table.
	function getProduct()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM product1 order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$pro_id = $row_pro['f_id'];
			$pro_brand = $row_pro['f_type'];
			$pro_model = $row_pro['f_name'];
			$pro_price = $row_pro['f_price'];
			$pro_image = $row_pro['f_image'];
			echo " 
					
					<div class='col-sm-6 col-md-4 col-lg-4 flicker-in-1'>
						<a class='lightbox' href='admin/product_images/$pro_image'>
							<img class='img-fluid' src='admin/product_images/$pro_image' alt='Gallery Images'>
						</a>
						<div class='buy-text'>
							<div class='product-name'>$pro_model</div>
							<div class='row'>
								<div class='mmk'> $pro_price</div>
								<a href='login.php?buy_pro=$pro_id'><div class='hvr-bounce-out order'><button type='button' href='login.php?buy_pro=$pro_id'
							class='btn btn-outline-warning '>Order</button></div></a>
							</div>
						</div>
					</div>
			
			
			
			";
			
		}
	  }
	}
	
	function getBrandPro()
	{
	  if(isset($_GET['brand']))
	  {
		global $con;
		$brand_title = $_GET['brand'];
		$get_brand_pro = "SELECT * FROM product1 WHERE f_type='$brand_title'";
		$run_brand_pro = mysqli_query($con,$get_brand_pro);
		while($row_brand_pro = mysqli_fetch_array($run_brand_pro))
		{ 
			$pro_id = $row_brand_pro['f_id'];
			$pro_brand = $row_brand_pro['f_type'];
			$pro_model = $row_brand_pro['f_name'];
			$pro_price = $row_brand_pro['f_price'];
			$pro_image = $row_brand_pro['f_image'];
			echo " 
					<div class='col-sm-6 col-md-4 col-lg-4 flicker-in-1'>
						<a class='lightbox' href='admin/product_images/$pro_image'>
							<img class='img-fluid' src='admin/product_images/$pro_image' alt='Gallery Images'>
						</a>
						<div class='buy-text'>
							<div class='product-name'>$pro_model</div>
							<div class='row'>
								<div class='mmk'> $pro_price</div>
								<a href='login.php?buy_pro=$pro_id'><div class='hvr-bounce-out order'><button type='button' 
							class='btn btn-outline-warning '>Order</button></div></a>
							</div>
						</div>
					</div>
			
			
			
			";
			
		}
	  }
	}
	
	
	
?>