<?php 

session_start();

if(isset($_SESSION['login']))
	header('Location: index.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Sri-Shop</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/home/icon.png">
</head><!--/head-->

<body>
	
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><?php
										if(isset($_SESSION['login']))
											echo '<br><div><p>Selamat datang, '.$_SESSION['email'].' </div></p>';
										?> 
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/groups/491278157684166/?fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://instagram.com/srishoppalembang/"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logoo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php"><i class=" glyphicon glyphicon-home"></i>Home</a></li>
								<li><a href="#" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		
		<br><br><div class=" text-center bottom-separator">
			<center><img src="images/home/after.png" class="img-responsive inline" alt=""></center>
		</div>
		
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form lass="form-signin" role="form" action="proseslogin.php" method="post">
						<?php
							if(isset($_GET['error']))
								echo $_SESSION['error'];
						?>
							<input type="email" class="form-control" placeholder="E-mail" name="email" required autofocus>
							<input type="password" class="form-control" placeholder="Password" name="password" required>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form class="form-signin" role="form" action="tambah_aksi.php" method="post">
							<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autofocus>
							<input type="password" class="form-control" name="password" placeholder="Password" required>
							<input type="text" class="form-control" name="alamat"  placeholder="Alamat" required>
							<input type="email" class="form-control" name="email" placeholder="Alamat Email" required autofocus>
							<select type="text" class="form-control" name="jk" >
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select><br>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<div class=" text-center bottom-separator">
        <center><img src="images/home/under.png" class="img-responsive inline" alt=""></center>
    </div>
	
		<footer id="footer"><!--Footer-->	
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Our</span>-Team</h2>
							<p>We are desainer of this website</p>
							<p>Enjoyed Shopping :D</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="profile.php">
									<div class="iframe-img">
										<img src="images/profil/tumblr_inline_movk4h3tFV1qz4rgp.gif" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-heart"></i>
									</div>
								</a>
								<p>Handayani Putri W</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="profile.php">
									<div class="iframe-img">
										<img src="images/profil/tumblr_inline_msetxfbSt31qz4rgp.gif" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-heart"></i>
									</div>
								</a>
								<p>Ayu Anggraini</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="profile.php">
									<div class="iframe-img">
										<img src="images/profil/tumblr_mbxyixrnxr1rtbxnq.gif" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-heart"></i>
									</div>
								</a>
								<p>Sisca Salvira F</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="profile.php">
									<div class="iframe-img">
										<img src="images/profil/tumblr_mk5bb0FKOs1rjwa86o1_500.gif" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-heart"></i>
									</div>
								</a>
								<p>Rizky Ramadhani D</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-2">
					</div>
					<div class="col-sm-4">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Palembang, South Sumatera, Indonesia</p>
						</div><br><br>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<center>
			<div class="container">
				<div class="row">
					<p>Copyright © 2015</p>
					Created by <span><a target="_blank" href="profile.php">Our</a></span><br>
					<p>Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
			</center>
		</div>		
	</footer><!--/Footer-->
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>