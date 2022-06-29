     
		  <?php
				error_reporting(1);
	
				include("connection.php");
	
				$del = "DELETE FROM product1 WHERE f_id='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				unlink("product_images/".$_GET['pro_img']);
				rmdir("product_images/".$_GET['pro_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('product.php','_self')</script>";
		  ?>
		
        