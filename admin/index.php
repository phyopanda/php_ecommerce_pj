<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up to Oishi Admin</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
	<!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	 <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> 
	
    <!-- Main css -->
    <link rel="stylesheet" href="css/login2.css">
	
<?php
session_start();
error_reporting(1);
$host="localhost";
$user="root";
$pass="";
//connection
$con=mysql_connect($host,$user,$pass) or die(mysql_error());
//db selection
mysql_select_db("oishiidb",$con);
if(isset($_POST['log']))
{
	if($_POST['id']=="" || $_POST['pass']=="")
	{ echo "fill your id and password first"; }
	else 
	{$d=mysql_query("select * from user where Name='{$_POST['id']}' ");
	$row=mysql_fetch_object($d);
	$fid=$row->Name;
	$fpass=$row->pass; 
		if($fid==$_POST['id'] && $fpass==$_POST['pass'])
		{$_SESSION['sid']=$_POST['id'];
		header('location:home.php'); }
		else 
		{ echo "User name or Password do not match!";
		}
	}
}
?>
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                     <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="#"class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="your_pass" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="log" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>