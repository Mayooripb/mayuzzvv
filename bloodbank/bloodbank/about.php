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
								<li role="presentation"><a href="registration.php">REGISTER HERE</a></li>
								<li role="presentation"><a href="login.php">Login</a></li>
								<li role="presentation"   class="active"><a href="about.php">About Us</a></li>
								<li role="presentation"><a href="contact.php">Contact Us</a></li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>

	<div class="header">
			<ul><h3 style="padding-left: 400px;color: green">ABOUT BLOOD</h3></ul>

			<h6 style="padding-left:1200px"><?php echo "DATE : ".Date("y-m-d");?></h6>	
	</div>

	<div class="container">
		<div class="col-lg-6">
			
			<marquee><p style="color: red"><b>.....The blood u donate givs someone another chance at life.....
			GIVE THE GIFT OF LIFE DONATE BLOOD.Your blood can give a life to someone. Your blood donation can give a precious smile to someone's face.Don't let fools or mosquitoes suck your blood put it to good use. Donate blood and save a life.</b></p></marquee>

			<div class="slide-body" data-group="slide">
				<table border="2" width="500" height="400">
					
					<tr align="center"><th>Type</th><th align="center">You Can Give Blood To</th><th align="center">You can Receive Blood From</th></tr>
					<tr align="center"><td>A+</td><td>A+ AB+</td><td>A+ A- O+ O-</td></tr>
					<tr align="center"><td>O+</td><td>O+ A+ B+ AB+</td><td>O+ O-</td></tr>
					<tr align="center"><td>B+</td><td>B+ AB+</td><td>B+ B- O+ O-</td></tr>
					<tr align="center"><td>AB+</td><td>AB+</td><td>Everyone</td></tr>
					<tr align="center"><td>A-</td><td>A+ A- AB+ AB-</td><td>A- O-</td></tr>
					<tr align="center"><td>O-</td><td>Everyone</td><td>O-</td></tr>
					<tr align="center"><td>B-</td><td>B+ B- AB+ AB-</td><td>B- O-</td></tr>
					<tr align="center"><td>AB-</td><td>AB+ AB-</td><td>AB- A- B- O-</td></tr>
					
				</table>
			
			</div>	
			<!--<div class="col-lg-6">
			<div class="map">
				<div class="slide-body" data-group="slide">
					<img src="travel img/pp2.jpg" alt="" class="img-responsive" >
				</div>	
			</div>-->
		
			<!--<form class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Your Name" name="name" required="required">
					</div>
				</div>-->
				<!--<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Your Email-id" name="email" required="required">
					</div>
				</div>-->
				<!--<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Textarea</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="8" placeholder="Enter The Details" required="required" name="text1"></textarea>
					</div>
				</div>-->

				<!--<br><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="send" value="..SendMessage..">
				&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="....Refresh....">	
				
			
				<?php
				include_once("connection.php");
				if(isset($_POST["send"]))
				{
					$date=Date("y-m-d");
					$name=$_POST["name"];
					$email=$_POST["email"];
					$text=$_POST["text1"];
					
					$regi="insert into contact(C_DATE,C_NAME,C_EMAIL,TEXT) values('$date','$name','$email','$text')";
					$q=mysql_query($regi);
					if($q)
					{
					?>
			            <script type="text/javascript">
							alert("Your Message Has Been Send Successfully");
						</script>
			        <?php
					}
					else
					{
						?>
				            <script type="text/javascript">
								alert("Failed to Send Message");
							</script>
				        <?php
					}
				}
				?>
				</form>-->	
		</div>
		<div class="col-lg-6">
			<div class="map">
				<div class="slide-body" data-group="slide">
					<img src="travel img/blood-donar1.jpg" alt="" class="img-responsive" >
				</div>	
			</div>
		</div>
	</div>	
	
		
	<hr>
	
	<!--start footer-->
	<footer>
		<div class="container">
			<div class="row">
				
				<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>.....The blood u donate givs someone another chance at life.....
			GIVE THE GIFT OF LIFE DONATE BLOOD.Your blood can give a life to someone. Your blood donation can give a precious smile to someone's face.Don't let fools or mosquitoes suck your blood put it to good use. Donate blood and save a life.</p>
		</div>
				
			</div>
		</div>
				
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-network">
							<!--<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
							<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>-->
						</ul>
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