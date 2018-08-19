<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Verification | Sri-Shop</title>
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
					$kodebarang = "";
					$ukuran = "";
					$jumlah = 0;
					$harga = 0;
					
					include'koneksi.php';
					$sql = "SELECT * FROM srishop_cart";
					$hasil = mysql_query($sql) or die (mysql_error());
					while($row = mysql_fetch_array($hasil))
					{
						$kodebarang = $kodebarang.$row['kodebarang']." / ";
						$jumlah = $jumlah + $row['jumlah'];
						$harga = $harga+$row['harga'];
					}
				?>	
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<div class="login-form"><!--login form-->
						<center><h2>Fill This Data To Complete Confirmation</h2></center>
						<form action="checkout.php" method="post">
							<p>Nama :</p><input type="text" class="form-control" placeholder="Nama " name="nama" value="<?php echo $_SESSION['nama']?>" required autofocus>
							<p>No Tlp./HP :</p><input type="text" class="form-control" placeholder="Tlp/HP" name="telepon" required>
							<p>E-mail :</p><input type="email" name="email" value="<?php echo $_SESSION['email']?>" required>
							<p>Alamat :</p><textarea rows="2" cols="80"  name="alamat" placeholder="fill your current addres here" required></textarea>
							 <br><input type="submit" class="btn btn-primary" name="checkout" value="Checkout"  style="width: 360px"/>
						</form>
						
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<div class=" text-center bottom-separator">
        <center><img src="under.png" class="img-responsive inline" alt=""></center>
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