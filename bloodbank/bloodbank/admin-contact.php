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
		//session_start();
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
								<li role="presentation"><a href="adminhome.php">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3"  class="active" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="admin-donor.php">ACTIVE DONOR'S</a></li>
										<li><a href="admin-user.php">USER DETAILS</a></li>
										<li><a href="admin-bloodrequest.php">PATIENT REQUEST</a></li>
									</ul>
								</li>
								
								<li role="presentation" class="active"><a href="admin-contact.php">MEssages</a>
								<li role="presentation"><a href="admin-bloodgroup.php">BLOODGROUP</a>
								<li role="presentation"><a href="index.php">Logout</a>
								</li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	<div class="header">
			<h6 style="padding-left:1200px"><?php echo "DATE : ".Date("y-m-d");?></h6>
			<ul><h3 style="padding-left: 500px;color: green">MESSAGES</h3></ul>


	</div>

	<div class="container">
		<!--<div class="col-lg-6">-->
	<?php
			$sts="Registered";
			$q="select * from contact";
			$p=mysql_query($q);
			if(mysql_num_rows($p)==0)
			{
			?>
			<center>
					<h3 style="color:green";><marquee>SORRY NO RESULT !!!!</marquee></h3>
					<img alt="" class="auto-style20" src="travel img/loading.gif"/>
				</center>
			<?php
			}
			else
			{
			?>
			<form>
			<table border="2" class="table">
				<tr><th>DATE</th><th>NAME</th><th>EMAIL</th><th>TEXT</th></tr>
				<?php
				while($row=mysql_fetch_array($p))
				{
					
					echo "<tr>";
					echo "<td>".$row['C_DATE']."</td>";
					echo "<td>".$row['C_NAME']."</td>";
					echo "<td>".$row['C_EMAIL']."</td>";
					echo "<td>".$row['TEXT']."</td>";
					echo "</tr>";
					
					
				}
				echo"</table>";
				echo "</form>";
			}
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