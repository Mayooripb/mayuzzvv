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
								<a href="index.html"><h1>BLOOD  BANK</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">

								<?php
								$idc=$_SESSION["id"];
								$j="select NAME,ADDRESS,CONTACT from registration where ID='$idc'";
								$j1=mysql_query($j);
								$ro=mysql_fetch_array($j1);
								$fn=$ro['NAME'];
								$fn1=$ro['ADDRESS'];
								$fn2=$ro['CONTACT'];
							?>
							

								<li role="presentation"><a href="userhome.php">Home</a></li>
								<li role="presentation"><a href="donar-registration.php">BECOME A DONOR</a></li>
								<li role="presentation"><a href="search-donar.php">SEARCH DONOR</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="profile.php">PROFILE</a></li>
										<?php
											$qry="select D_ID from donarregistration where ID=$idc";
											$exe=mysql_query($qry);
											$fet=mysql_fetch_array($exe);
												$D_ID=$fet['D_ID'];
										?>
										<li><a href="u-request.php">Requests</a></li>
									</ul>
								</li>
								<li role="presentation"><a href="contact.php">Contact</a></li>	
								<li role="presentation"><a href="index.php">Logout</a></li>					
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	<div class="header">
			<h5 style="color:black;padding-left: 1110px"><?php echo "WELCOME   ".$fn."";?></h5><h6 style="padding-left:1200px"><?php echo "DATE : ".Date("y-m-d");?></h6>
			<ul><h3 style="padding-left: 500px;color: green">VIEW REQUESTS</h3></ul>
			


	</div>

	<div class="container">
		<!--<div class="col-lg-6">-->
	<?php
			
	?>
			<form>
			<table border="2" class="table">
				<tr><th>ID</th><th>NAME</th><th>NO.OF UNITS</th><th>REQUIRED DATE</th><th>HOSPITAL-ADDRESS</th><th>CONTACT</th><th>EMAIL</th></tr>
				<?php
				$sts="Requested";

			$dte=Date("y-m-d");
			$q="select * from bloodrequest where D_ID='$D_ID' and STATUS='$sts'and B_DATE>='$dte'";
			//echo "$q";
			$pp=mysql_query($q);	
				while($row=mysql_fetch_array($pp))
				{


					
					echo "<tr>";
					echo "<td>".$row['R_ID']."</td>";
					
					echo "<td>".$row['U_NAME']."</td>";
					echo "<td>".$row['NOFUNIT']."</td>";
					echo "<td>".$row['B_DATE']."</td>";
					
					echo "<td>".$row['H_ADDRESS']."</td>";
					echo "<td>".$row['U_CONTACT']."</td>";
					
					
					echo "<td>".$row['U_EMAIL']."</td>";
					echo "</tr>";
					
					
				}
				echo"</table>";
				echo "</form>";
			
				?>
			</div>
		<!--</div>-->
	<!-- Responsive slider - START -->
	<div class="slider">
		
		
	</div>


    <!-- Responsive slider - END -->
 
	
		<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>.....The blood u donate givs someone another chance at life.....
			GIVE THE GIFT OF LIFE DONATE BLOOD.Your blood can give a life to someone. Your blood donation can give a precious smile to someone's face.Don't let fools or mosquitoes suck your blood put it to good use. Donate blood and save a life.</p>
		</div>
	<div class="breadcrumb">
		<h4>Recent Works</h4>
	</div>
	
	
	
	
	<hr>
	
	
	</footer>-->
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