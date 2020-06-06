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
						include_once("connection.php");
						session_start();
	?>
    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<h1>BLOOD  BANK</h1>
							</div>
						</div>

						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
							<li>
							<?php
								$idc=$_SESSION["id"];
								$j="select NAME from registration where ID='$idc'";
								$j1=mysql_query($j);
								$ro=mysql_fetch_array($j1);
								$fn=$ro['NAME'];
							?>
							<!--<h5 style="color:green";><?php echo "Welcome   ".$fn."";?></h5>-->
							</li><li> </li>
								<li role="presentation" class="active"><a href="index.php">Home</a></li>
								<li role="presentation"><a href="donar-registration.php">become a donar</a></li>
								<li role="presentation"><a href="search-donar.php">SEARCHDONOR</a>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="profile.php">PROFILE</a></li>
										<?php
											$qry="select D_ID from donarregistration where ID=$idc";
											$exe=mysql_query($qry);
											$fet=mysql_fetch_array($exe);
												$D_ID=$fet['D_ID'];


											$qry1="select * from bloodrequest where D_ID='$D_ID'";
											$exe1=mysql_query($qry1);
											if(mysql_num_rows($exe1)==0)
											{	
												
											}
											else
											{
												?><li><a href="u-request.php">Requests</a></li><?php
											}
										?>
									</ul>
								</li>
								<li role="presentation"><a href="index.php">Logout</a></li>
										
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	
	<!-- Responsive slider - START -->
	<div class="slider">
		<!--<div class="">
			<div class="">-->
				<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
					<div class="slides" data-group="slides">						
						<ul>
							<li>
								<div class="slide-body" data-group="slide">
									<img src="travel img/banner1.jpg" alt="" class="img-responsive" >
								</div>					
							</li>
							<li>
								<div class="slide-body" data-group="slide">
									<img src="travel img/banner1.jpg" alt="" class="img-responsive" >
								</div>
							</li>
											
						</ul>
					</div>			   
					<a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
					<a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>		
				</div>
		
	</div>
   
 
	
		<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>We provide you a comfortable and satisfied travel for you and your famillly.Come and enjoy your travel with MY TRAVEL.</p>
		</div>
	<div class="breadcrumb">
		<h4>Recent Works</h4>
	</div>
	
	
	
	<hr>
	
	
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