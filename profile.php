<?php include 'koneksi.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile | Sri-Shop</title>
 <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/home/icon.png">
</head>

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
								<?php
										if(isset($_SESSION['login'])){
										echo'<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>';
										echo'<li><a href="contact.php"><i class="fa fa-user"></i> Contact</a></li>';
										echo'<li><a href="profile.php"><i class="fa fa-heart"></i> Profil</a></li>';
											if($_SESSION['email']== 'admin@gmail.com'){
												echo'<li><a href="data.php"><i class="glyphicon glyphicon-list"></i> Pengunjung</a></li>';
												echo'<li><a href="data2.php"><i class="glyphicon glyphicon-user"></i> Pembelian</a></li>';
												echo'<li><a href="isi.php"><i class="fa fa-plus"></i> Upload</a></li>';
											}
											echo'<li> <a href="logout.php" class="navbar-link"><i class="fa fa-unlock"></i> logout</a></li>';
										}else{
											echo '<li><a href="login.php" class="navbar-link"><i class="fa fa-lock"></i> Login</a></li>';
										}
										
									?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<div class=" text-center bottom-separator">
        <center><img src="images/home/after.png" class="img-responsive inline" alt=""></center>
    </div>
	
	<div class="media commnets">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="media-body">
				<img src="images/home/owner.png" alt="">
				<a class="pull-left" href="#">
					<img class="media-object" src="images/profil/sumaryatisri_2015-01-20_23-04-41.jpg" alt="">
				</a>
				<h4 class="media-heading">Sri Sumaryati Putri</h4>
				<p>Mahasiswi Fakultas ilmu komputer di Universitas Sriwijaya, Jurusan Sistem Informasi, angkatan 2014</p>
				<div class="blog-socials">
					<ul>
						<li><a href="https://www.facebook.com/srie.ghokiel?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/sri_puputSri"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/srishoppalembang/"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class=" text-center bottom-separator">
        <center><img src="images/home/under.png" class="img-responsive inline" alt=""></center>
    </div>
	
	<div class="media commnets">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="media-body">
				<img src="images/home/Untitled-2.png" alt="">
				<a class="pull-left" href="#">
					<img class="media-object" src="images/profil/IMG_20150315_181116.jpg" alt="">
				</a>
				<h4 class="media-heading">Handayani Putri Wardanny</h4>
				<p>Mahasiswi Fakultas ilmu komputer di Universitas Sriwijaya, Jurusan Sistem Informasi, angkatan 2014</p>
				<p>NIM :09031181419014</p>
				<div class="blog-socials">
					<ul>
						<li><a href="https://www.facebook.com/handayani.pillud"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/handayaniputrii"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/handayaniputrii/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="http://hphandayani.blogspot.com/"><i class="fa fa-globe"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
					
	<div class="media commnets">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="media-body">
				<a class="pull-left" href="#">
					<img class="media-object" src="images/profil/ui.jpg" alt=""><br>
				</a>
				<h4 class="media-heading">Sisca Salvira Febrini</h4>
				<p>Mahasiswi Fakultas ilmu komputer di Universitas Sriwijaya, Jurusan Sistem Informasi, angkatan 2014</p>
				<p>NIM :09031281419050</p>
				<div class="blog-socials">
					<ul>
						<li><a href="https://www.facebook.com/sisca.sf?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://instagram.com/ssalvirafebbi/"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
					
	<div class="media commnets">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="media-body">
				<a class="pull-left" href="#">
					<img class="media-object" src="images/profil/IMG_20150516_115503.jpg" alt="">
				</a>
				<br><br><br><br><h4 class="media-heading">Ayu Anggraini</h4>
				<p>Mahasiswi Fakultas ilmu komputer di Universitas Sriwijaya, Jurusan Sistem Informasi, angkatan 2014</p>
				<p>NIM :09031281419048</p>
				<div class="blog-socials">
					<ul>
						<li><a href="https://www.facebook.com/profile.php?id=100006619412272&fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/AyuAnggr123"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://instagram.com/anggraayu123/"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="media commnets">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="media-body">
				<a class="pull-left" href="#">
					<img class="media-object" src="images/profil/IMG_20150516_115457.jpg" alt="">
				</a>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<h4 class="media-heading">Rizky Ramadhani Damanik</h4>
				<p>Mahasiswi Fakultas ilmu komputer di Universitas Sriwijaya, Jurusan Sistem Informasi, angkatan 2014</p>
				<p>NIM :09031181419030</p>
				<div class="blog-socials">
					<ul>
						<li><a href="https://www.facebook.com/imoetrizki44?fref=ts"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/QiQY_rdmk"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
					
	<div class=" text-center bottom-separator">
        <center><img src="images/home/after.png" class="img-responsive inline" alt=""></center>
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