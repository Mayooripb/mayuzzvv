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
								<li role="presentation"><a href="index.php">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle effect-3"  class="active" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="admin-bloodrequest.php">PATIENTS REQUESTS</a></li>
										<li><a href="admin-donor.php">ACTIVE DONOR'S</a></li>
										<li><a href="admin-user.php">USER DETAILS</a></li>
									</ul>
								</li>
								<li role="presentation" class="active"><a href="admin-bloodgroup.php">BLOODGROUP</a>
								<li role="presentation"><a href="admin-contact.php">MEssages</a>
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
			<ul><h3 style="padding-left: 500px;color: green">BLOOD GROUP DETAILS</h3></ul>


	</div>

	<div class="container">
	<div class="col-lg-6">
	<form class="form-horizontal" role="form" method="POST">
		<table class="table" text-align="center">
		<tr><td><td>BLOODGROUP</td></td><th>:</th><td><select name="blood">
					  									<option value="">------- Select --------</option>
														<?php
														include_once("connection.php");
														$qy="select B_GROUP from bloodgroup";
														$r=mysql_query($qy);

															while($re=mysql_fetch_array($r))
															{
																echo "<option value='".$re['B_GROUP']."'>".$re['B_GROUP']."</option>"; 
															}
														?>
													   </select><br></td>
		    <td><td><td><td><td><td><td><td><td><td>ADD</td></td></td></td></td></td></td></td></td></td><th>:</th><td><input type="text" name="new" placeholder="Add New BloodGroup"></td>
		</tr>
		</table>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="...ADD..." name="add">&nbsp;&nbsp;&nbsp;&nbsp;	
					</div>
			</div>
			<?php
			if(isset($_POST['add']))
			{
				$new=$_POST['new'];
				
				$qry1="insert into bloodgroup values('$new')";
				$rs=mysql_query($qry1);
			}
			?>

			</form>	

			</div>
		</div>
	<!-- Responsive slider - START -->
	<div class="slider">
		
		
	</div>


    <!-- Responsive slider - END -->
 
	
		<div class="content">
			<h2><span>......DONATE BLOOD BE A HERO.......</span></h2>
			<p>We provide you a comfortable and satisfied travel for you and your famillly.Come and enjoy your travel with MY TRAVEL.</p>
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