<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resi Bootstrap Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">	
  </head>
  <body>

  	<?php
	session_start();
	?>

    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="index.php"><h1>BLOOD BANK</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php">Home</a></li>
								<li role="presentation"><a href="registration.php">Register Here</a></li>
								<li role="presentation" class="active"><a href="login.php">Login</a></li>
								<li role="presentation"><a href="about.php">About Us</a></li>
								<li role="presentation"><a href="contact.php">Contact</a></li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	









		










	
	<div class="header">
			<ul><h2 style="padding-left: 300px;color: green">LOGIN</h2></ul>	
	</div>
	<div class="container">
		<div class="col-lg-6">
			<form class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					<!--<label for="inputEmail3" class="col-sm-2 control-label">USER_NAME</label>-->
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="inputEmail3"  name="username" placeholder="username">
					</div>
				</div>
				<div class="form-group">
					<!--<label for="inputPassword3" class="col-sm-2 control-label">PASSWORD</label>-->
					<div class="col-sm-10">
					    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
					</div>
				</div>
				
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="...SIGN IN..." name="login">&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="Registration.php">SIGN UP</a>
						
					</div>
			</div>
			<div  class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
   					<br><a href="Changepassword.php">Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  						<a href="forgotpassword.php">Forgot Password</a>
  					</div>
   				</div>


			</form>	

			
		</div>
		
	</div>	
	


	<?php
	
	include("connection.php");
	if(isset($_POST['login']))
	{
	$uid=$_POST['username'];
	$pass=$_POST['password'];
	$qry1="select * from login where USER_ID='$uid' and PASSWORD='$pass'";
		$rs=mysql_query($qry1);
		$res=mysql_fetch_array($rs);
	$q="select * from registration where USER_NAME='$uid' and PASSWORD='$pass'";
	$p=mysql_query($q);
	$p1=mysql_fetch_array($p);
		

	if($p1&&$res1)
	{
	
	$_SESSION["USER_ID"]=$uid;
	$_SESSION["USER_NAME"]=$uname;
	$_SESSION["PASSWORD"]=$password;
	//$_SESSION['firstname']=$fname;
	

	$_SESSION["pswd"]=$pass;
	
	}
	if($res['TYPE']=="admin")
	{
		 $_SESSION["id"]=$p1['ID'];
		 echo "<script>location.href='adminhome.php'</script>";
	}
	else if($res['TYPE']=="customer")
	{
		$_SESSION["id"]=$p1['ID'];
		echo "<script>location.href='userhome.php'</script>";
	}
	else
	{
		?>
    	<script>
			alert("invalid user");
		</script>
		<?php
	}
	}
	?>








































	
		
	
	<hr>
	
	<!--start footer-->
	<footer>
		<div class="container">
			
			</div>
			<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>We provide you a comfortable and satisfied travel for you and your famillly.Come and enjoy your travel with MY TRAVEL.</p>
		</div>
		</div>
				
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-network">
							<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright">
							<p>
								<span>&copy;Resi 2014 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
							</p>
                           
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</footer>
	<!--end footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>