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
								<li role="presentation" class="active"><a href="registration.php">REGISTER HERE</a></li>
								<li role="presentation"><a href="login.php">Login</a></li>
								<li role="presentation"><a href="about.php">About Us</a></li>
								<li role="presentation"><a href="contact.php">Contact Us</a></li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	

	<div class="header">
			<ul><h3 style="padding-left: 400px;color: green">REGISTER HERE</h3></ul>	
	</div>
	<div class="container">
		<div class="col-lg-6">


		<form action="" method="POST">


			
	

		


	<table class="table" text-align="center">
	<div class="row">
	<tr><td><td>Date</td></td><th>:</th><td><input type="text"  name="date" value="<?php echo Date("y-m-d");?>"></td>
		<td><td><td><td><td><td><td><td><td><td>Name</td></td></td></td></td></td></td></td></td></td><th>:</th><td><input type="text" name="name" placeholder="Enter your name" required="required"></td>
	</tr></div>
	<tr><td><td>Address</td></td><th>:</th><td><textarea placeholder=" Your communication address" name="address" required="required"></textarea></td>
		<td><td><td><td><td><td><td><td><td><td>Gender</td><th>:</th><td><input type="radio" name="gender" value="female">Female
																		 <input type="radio" name="gender" value="male">Male</td></tr>
	<tr><td><td>Contact No</td></td><th>:</th><td><input type="text" name="contact" placeholder="Mobile Number" minlength="10"/ maxlength="12" required="required"></td>

	<td><td><td><td><td><td><td><td><td><td>District</td><th>:</th><td><select name="dist">
		<option value="">------- Select --------</option>
			<?php
				include_once("connection.php");
				$qy="select DISTRICT from district";
				$r=mysql_query($qy);

					while($re=mysql_fetch_array($r))
					{
						echo "<option value='".$re['DISTRICT']."'>".$re['DISTRICT']."</option>"; 
					}
			?>
	</select></td></tr>

	<tr><td><td>EmailID</td></td><th>:</th><td><input type="email" name="email" placeholder="Enter your email-id"></td>	
	<td><td><td><td><td><td><td><td><td><td>UserName</td><th>:</th><td><input type="text" name="username" placeholder="size 7" minlength="7" maxlength="10"/ required="required"></td></tr>
	<tr><td><td>CreatePassword</td></td><th>:</th><td><input type="password" name="pswd1" maxlength="10"/ minlength="7"/ placeholder="size 7-10"></td>
	<td><td><td><td><td><td><td><td><td><td>ConfirmPassword</td><th>:</th><td><input type="password" name="pswd2" placeholder="Same as password"></td></tr>
	</table>
		<br>
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="accept" value="accept" required="required">I accept all the above details.<br><br>
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" name="register" value="...Register Now...">
		&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="....Refresh....">							
						

</form>

	<?php
	include_once("connection.php");
		if(isset($_POST["register"]))
		{
			$date=$_POST["date"];
			$name=$_POST["name"];
			$address=$_POST["address"];
			$gender=$_POST["gender"];
			$contact=$_POST["contact"];
			$district=$_POST["dist"];
			$email=$_POST["email"];
			$username=$_POST["username"];
			$password1=$_POST["pswd1"];
			$pswd11=$password1;
			$password2=$_POST["pswd2"];
			$status="Registered";
			$usertype="customer";
				
			if($password1==$password2)
			{


				$regi="insert into registration(DATE,NAME,ADDRESS,GENDER,CONTACT,DISTRICT,EMAIL,USER_NAME,PASSWORD,STATUS) values('$date','$name','$address','$gender','$contact','$district','$email','$username','$password1','$status')";
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
			else
			{
				?>
			     	<script type="text/javascript">
						alert("Password and confirm password should be same");
					</script>
			    <?php
			}
			
			if($password1==$password2)
			{
				$log="insert into login(TYPE,USER_ID,PASSWORD) values('$usertype','$username','$password1')";
				$l=mysql_query($log);
				if($l)
				{
					echo "";
				}
				else
				{
					session_start();
					$userid=$_POST['user'];
					echo"";
				}
				echo "<script>location.href='login.php'</script>";
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