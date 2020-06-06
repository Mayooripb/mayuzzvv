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
								$j="select NAME from registration where ID='$idc'";
								$j1=mysql_query($j);
								$ro=mysql_fetch_array($j1);
								$fn=$ro['NAME'];
							?>
							

								<li role="presentation"><a href="userhome.php">Home</a></li>
								<li role="presentation"><a href="donar-registration.php">BECOME A DONOR</a></li>
								<li role="presentation" class="active"><a href="login.php">SEARCH DONOR</a></li>
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
			<ul><h3 style="padding-left: 400px;color: green">SEARCH DONAR</h3></ul>


	</div>
	<div class="container">
		<div class="col-lg-6">


		<form action="" method="POST">


			
	

		


	<table text-align="center">
	
		<tr><th></th><td><select name="bgroup" required="required">
			<option value="">--- Select Blood Group ---</option>
			<?php
				include_once("connection.php");
				$qy="select B_GROUP from bloodgroup";
				$r=mysql_query($qy);

					while($re=mysql_fetch_array($r))
					{
						echo "<option value='".$re['B_GROUP']."'>".$re['B_GROUP']."</option>"; 
					}
			?>
			</select></td><td></td>
		</tr>
	</table>
	
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="register" value="..SEARCH.."><BR><BR>
									
						

</form>

	<?php
		if(isset($_POST["register"]))
		{
			$id=$idc;
			$bgroup=$_POST["bgroup"];


			$q="select * from donarregistration where BLOODGROUP='$bgroup'";
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
				<ul><h4 style="padding-left: 200px;color: green">DONAR DETAILS</h4></ul>
				<br>
				<table border="2" class="table" cellpadding="5" text-align="center">
				<tr><th>DONAR ID</th><th>DONARNAME</th><th>ADDRESS</th><th>CONTACT</th><th>AGE</th><th>HEIGHT</th><th>WEIGHT</th><th>ACTION</th></tr>
				<?php
				while($row=mysql_fetch_array($p))
				{
					$D_ID=$row['D_ID'];
					echo "<tr>";
					echo "<td>".$row['D_ID']."</td>";
					echo "<td>".$row['D_NAME']."</td>";
					echo "<td>".$row['D_ADDRESS']."</td>";
					echo "<td>".$row['CONTACT']."</td>";
					echo "<td>".$row['AGE']."</td>";
					echo "<td>".$row['HEIGHT']." cm</td>";
					echo "<td>".$row['WEIGHT']." Kg</td>";
					echo "<td><a href='blood-request.php?D_ID=$row[D_ID]'>REQUEST</a></td>";
					echo "</tr>";
					
				}
				echo"</table>";
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