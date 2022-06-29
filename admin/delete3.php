     
		  <?php
				error_reporting(1);
	
				include("connection.php");
	
				$del = "DELETE FROM register WHERE f_no='{$_GET['pro_id']}'";
				$result = mysqli_query($con, $del);
				
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('register.php','_self')</script>";
		  ?>
		
        