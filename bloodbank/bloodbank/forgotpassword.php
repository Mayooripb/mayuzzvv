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
								<li role="presentation"><a href="registration.php">Registration</a></li>
								<li role="presentation"><a href="login.php">Login</a></li>
								<!--<li role="presentation"><a href="feature.html">Feature</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>-->
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	









		










	
	<div class="header">
			<ul><h4 style="padding-left: 300px">GET PASSWORD</h4></ul>	
	</div>
	<div class="container">
		<div class="col-lg-6">
			<form class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">UserName</label>
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="inputEmail3"  name="username" placeholder="username">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">ContactNo</label>
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="inputPassword3" name="phno" placeholder="Recovery phno">
					</div>
				</div>
				
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="..Get My Password.." name="login">&nbsp;&nbsp;&nbsp;&nbsp;	
					</div>
				</div>
			</form>	
		</div>	
	</div>	
	
	<?php
	include_once("connection.php");
	if (isset($_POST['login']))
	 {
	 		$uid=$_POST['username'];
			$phno=$_POST['phno'];
			$p2="select PASSWORD from registration where USER_NAME='$uid' and CONTACT='$phno'";
			$q2=mysql_query($p2);
			$row=mysql_fetch_array($q2);
			$password=$row['PASSWORD'];
			if($uid)
	?>
			<center>
			<h4 style="color:green";><?php echo "YOUR   PASSWORD   IS  ". "' ".$password." '" ."  PLEASE   REMEMBER   THIS...";?></h4>
			</center>
	<?php
	}
	?>












	<hr>
	<!--start footer-->
	<footer>
		<div class="container">
			
			</div>
			<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>.....The blood u donate givs someone another chance at life.....
			GIVE THE GIFT OF LIFE DONATE BLOOD.Your blood can give a life to someone. Your blood donation can give a precious smile to someone's face.Don't let fools or mosquitoes suck your blood put it to good use. Donate blood and save a life.</p>
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