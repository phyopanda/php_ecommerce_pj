     
		  <?php
				error_reporting(1);
	
				include("connection.php");
	
				$del = "DELETE FROM buy WHERE f_no='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('order.php','_self')</script>";
		  ?>
		
        