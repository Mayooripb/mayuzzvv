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
								$j="select NAME,ADDRESS,CONTACT,EMAIL from registration where ID='$idc'";
								$j1=mysql_query($j);
								$ro=mysql_fetch_array($j1);
								$fn=$ro['NAME'];
								$fn1=$ro['ADDRESS'];
								$fn2=$ro['CONTACT'];
								$fn3=$ro['EMAIL'];
							?>
							

								<li role="presentation"><a href="userhome.php">Home</a></li>
								<li role="presentation"><a href="donar-registration.php">BECOME A DONOR</a></li>
								<li role="presentation"><a href="search-donar.php">SEARCH DONOR</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>	
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
			<ul><h3 style="padding-left: 400px;color: green">SEND REQUEST</h3></ul>


	</div>
	<div class="container">
		<div class="col-lg-6">

			<?php 
			$D_ID=$_REQUEST["D_ID"];
			$_SESSION["D_ID"]=$D_ID;
	
			$q ="select * from donarregistration where D_ID='$D_ID'";

			$rs=mysql_query($q);
			$rs1=mysql_fetch_array($rs);
				$mn=$rs1['BLOODGROUP'];
				
			?>

		<form action="" method="POST">


			
	

		


	<table class="table" text-align="center">
	<tr><td><td>UrName</td></td><th>:</th><td><input type="text" name="name" value="<?php echo $fn;?>"></td><td></td>
		<td><td><td><td><td><td><td><td><td><td>ContactNo</td></td><th>:</th><td><input type="text" name="contact" value="<?php echo $fn2;?>"></td><td></td>
	</tr>
	<tr><td><td>No.of.UnitsRequired</td></td><th>:</th><td><input type="text" name="no" required="required"></td><td></td>	
		<td><td><td><td><td><td><td><td><td><td>RequiredDate</td><th>:</th><td><input type="date" name="date" required="required"></td><td></td>
	</tr>
	<tr><td><td>E-mail</td></td><th>:</th><td><input type="E-mail" name="email" value="<?php echo $fn3;?>"></td><td></td>
		<td><td><td><td><td><td><td><td><td><td>HospitalAddress</td></td><th>:</th><td><textarea  name="address" placeholder="Enter Hospital Address" required="required"></textarea></td><td><td></td></td>
	</tr>
	
	</table>s
		<br>
		<br>
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="register" value="..SEND REQUEST..">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="....Refresh....">	
		 
								
						

</form>

	<?php
		if(isset($_POST["register"]))
		{
			$id=$idc;
			$d_id=$D_ID;
			$bgroup=$mn;
			$name=$_POST["name"];
			$contact=$_POST["contact"];
			$nounit=$_POST["no"];
			$date=$_POST["date"];
			$email=$_POST["email"];
			$address=$_POST["address"];
			
			
			$status="Requested";
			
				
			
				$regi="insert into bloodrequest(D_ID,ID,U_NAME,U_CONTACT,B_GROUP,NOFUNIT,B_DATE,U_EMAIL,H_ADDRESS,STATUS) values('$d_id','$id','$name','$contact','$bgroup','$nounit','$date','$email','$address','$status')";
				$q=mysql_query($regi);
				if($q)
				{
					?>
			            <script type="text/javascript">
							alert("Your Request Has Been Forwarded");
							window.location="search-donar.php";
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