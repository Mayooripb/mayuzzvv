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
								<a href="index.php"><h1>BLOOD BANK</h1></a>
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
								<li role="presentation" class="active"><a href="donar-registration.php">BECOME A DONOR</a></li>
								<li role="presentation"><a href="search-donar.php">SEARCH DONOR</a></li>
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
			<ul><h3 style="padding-left: 400px;color: green">BECOME A DONAR</h3></ul>


	</div>
	<div class="container">
		<div class="col-lg-6">


		<form action="" method="POST">


			
	

		


	<table class="table" text-align="center">
	<tr><td><td>Name</td></td><th>:</th><td><input type="text" name="name" value="<?php echo $fn;?>"></td><td></td>
		<td><td><td><td><td><td><td><td><td><td>BloodGroup</td></td><th>:</th><td><select name="bgroup" required="required">
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
	</select></td><td></td></tr>
	<tr><td><td>DateOfBirth</td></td><th>:</th><td><input type="date" name="dob" required="required"></td><td></td>	
		<td><td><td><td><td><td><td><td><td><td>Age</td><th>:</th><td><input type="text" name="age" placeholder="enter your age" required="required"></td><td></td>
	</tr>
	<tr><td><td>ContactNo</td></td><th>:</th><td><input type="text" name="contact" value="<?php echo $fn2;?>"></td><td></td>
		<td><td><td><td><td><td><td><td><td><td>Address</td></td><th>:</th><td><textarea  name="address" placeholder="Enter your Address" required="required"></textarea></td><td><td></td></td>
	</tr>
	<tr><td><td>Height</td></td><th>:</th><td><input type="text" name="height" required="required"></td><td>Cm</td>
		<td><td><td><td><td><td><td><td><td><td>Weight</td></td><th>:</th><td><input type="text" name="weight" required="required"></td><td>Kg</td></tr>

	</table>
		<br>
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="accept" value="accept" required="required">I accept all the above details and i accept the risks associated with this procdure. <br><br>
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="register" value="..Register Now..">
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="....Refresh....">							
						

</form>

	<?php
		if(isset($_POST["register"]))
		{
			$id=$idc;
			$date=Date("y-m-d");
			$name=$_POST["name"];
			$dob=$_POST["dob"];
			$age=$_POST["age"];
			$address=$_POST["address"];
			$contact=$_POST["contact"];
			$bgroup=$_POST["bgroup"];
			$height=$_POST["height"];
			$weight=$_POST["weight"];
			$status="Registered";
			
				
			
				$regi="insert into donarregistration(ID,DATE,D_NAME,DOB,AGE,D_ADDRESS,CONTACT,BLOODGROUP,HEIGHT,WEIGHT,STATUS)values('$id','$date','$name','$dob','$age','$address','$contact','$bgroup','$height','$weight','$status')";
				$q=mysql_query($regi);
				if($q)
				{
					?>
			            <script type="text/javascript">
							alert("Success");
						</script>
			        <?php
				}
				else
				{
					?>
			            <script type="text/javascript">
							alert("Failed to register");
						</script>
			        <?php
				}
			
		}
		
			?>	



</div></div>	
		</div>
		
	</div>	
	<hr>
	
	<!--start footer-->
	<footer>
		<div class="container">
			
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
					<!--<div class="col-lg-12">
						<div class="copyright">
							<p>
								<span>&copy;Resi 2014 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
							</p>
                           
						</div>
					</div>-->
					
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