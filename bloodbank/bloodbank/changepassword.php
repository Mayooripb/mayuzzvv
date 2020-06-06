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
								<li role="presentation"><a href="index.php">Home</a></li>
								<li role="presentation" class="active"><a href="login.php">Login</a></li>
								<li role="presentation"><a href="feature.html">Feature</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="contact.html">Contact</a></li>						
							</ul>
						</div>
					</div>			
				</nav>
			</div>
		</div>
	</header>
	








		










	
	<div class="header">
			<ul><h3 style="padding-left:200px;color: green">CHANGE PASSWORD</h3></ul>	
	</div>
	<div class="container">
		<div class="col-lg-6">
			<form class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					
					<div class="col-sm-10">
					    <input type="text" class="form-control" id="inputEmail3"  name="username" placeholder="Username">
					</div>
				</div>
				<div class="form-group">
				
					<div class="col-sm-10">
					    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-sm-10">
					    <input type="password" class="form-control" id="inputPassword3" name="newpassword" placeholder="New Password">
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-sm-10">
					    <input type="password" class="form-control" id="inputPassword3" name="newpassword1" placeholder="Confirm Password">
					</div>
				</div>
				
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" value="...UPDATE..." name="update">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" value="...CANCEL..." name="cancel">&nbsp;&nbsp;&nbsp;&nbsp;
						
					</div>
				</div>
			


			</form>	

			
		</div>
		
	</div>	
	


	<?php
	if(isset($_POST["update"]))
	{
		
		
	 	$currentpassword=$_POST["password"];
  	    $newpassword=$_POST["newpassword"];
  	    $newpassword1=$_POST["newpassword1"];
 		$username=$_POST["username"];
 		if($newpassword!=$newpassword1)
 		{
 			?>
                <script type="text/javascript">
					alert("PASSWORD AND CONFIRM PASSWORD SHOULD BE SAME");
				</script>
           	<?php
 		}
 		else
 		{


  		$p="select * from login";
  		$rs=mysql_query($p);
		while($row=mysql_fetch_array($rs))
		{
		
				$username1=$row['USER_ID'];
				$password1=$row['PASSWORD'];		
		if($username==$username1)
		{
			if($currentpassword==$password1)
			{
				$q1="update login set PASSWORD='$newpassword' where USER_ID ='$username' and PASSWORD='$currentpassword'";
				$q3="update registration set PASSWORD='$newpassword' where USER_NAME='$username' and PASSWORD='$currentpassword'";
				$p1=mysql_query($q1);
				$p3=mysql_query($q3);
				if($p1)
				{
					 echo "<script>location.href='login.php'</script>";
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("! ! ! FAILED TO UPDATE.  RETYPE CORRECT USERNAME AND PASSWORD ");
					</script>
					<?php
				}
			}
		}
		
		
	}
}
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