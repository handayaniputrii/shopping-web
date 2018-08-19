<?php session_start();include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Sri-Shop</title>
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
							<a href="index.html"><img src="images/home/logoo.png" alt="" /></a>
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
											echo '<li><a href="login.php" class="navbar-link"><i class="fa fa-lock"></i> Login</a><li>';
										}
										
									?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
							<li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>"Your dresses should be tight enough to show you're a 
									woman and loose enough to show you're a lady."</i> —Edith Head</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>"Whoever said that money can't buy happiness, simply didn't 
									know where to go shopping."</i> —Bo Derek</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>“A girl should be two things: classy and fabulous.”</i> ―Coco Chanel </p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>“Fashion is a form of ugliness so intolerable that we have to 
									alter it every six months.” </i>―Oscar Wilde</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/4.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>“I love new clothes. If everyone could just wear new clothes everyday, 
									I reckon depression wouldn’t exist anymore.”</i> 
									—Sophie Kinsella, Confessions of a Shopaholic</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/5.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>“Fashion is not something that exists in dresses only. Fashion is in the sky, 
									in the street, fashion has to do with ideas, the way we live, what is happening.” 
									</i>―Coco Chanel</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/6.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Sri</span>-ShopPalembang</h1>
									<p><i>“Style is knowing who you are, what you want to say, and not giving a damn”</i> ―Orson Welles</p>
								</div>
								<div class="col-sm-6">
									<img src="images/slider/7.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Sri-Shop</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<center>	
								<img height="240px" width="240px" class="media-object" src="images/home/sumaryatisri_2015-05-10_13-49-51.png" alt="">
							</center>
								<div class="panel-heading">
										<i class="fa fa-heart"></i> It's Trusted Online Shop<br>
										<i class="fa fa-calendar"></i> Since, January 2015<br>
										<i class="fa fa-money"></i> Paymen with account BRI/Sumsel Babel<br>
										<i class="fa fa-user"></i> Owner: <a href="profile.php">Sri Sumaryati Putri</a><br>
										<i class="fa fa-qrcode"></i> Akun:
										<div class="blog-socials">
											<ul>
												<li><a href="https://www.facebook.com/groups/491278157684166/?fref=ts"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://instagram.com/srishoppalembang/"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>
								</div>
						</div>				
					</div>
				</div><!-- Shop -->
				
				<div class="col-sm-9 padding-right">
					<h2 class="title text-center">Items</h2>			
					<div class="features_items"><!--features_items-->
						<?php $sql = "select * FROM srishop_simpan";
									  $tampil = mysql_query($sql);
									  while (($data = mysql_fetch_array($tampil))) {if($data['id'] > 180 && $data['id'] <= 210)
						{?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<div class="image"><?php echo "<img src='gambar/".$data['gambar']."'";?> alt="" /></a> </div>
											<h2>Rp <?php echo $data['harga'];?></h2>
											<p><?php echo $data['title'];?></p>
											<p><?php echo $data['keterangan'];?></p>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Rp <?php echo $data['harga'];?></h2>
											<p><?php echo $data['title'];?></p>
											<p><?php echo $data['keterangan'];?></p>
											<?php
												if(isset($_SESSION['login'])){
											?>
											<a href="pesan.php?id=<?php echo $data['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										<?php }?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }} ?>
						
					</div><!--features_items-->
					<ul class="pagination">
							<li><a href="index6.php">&laquo;</a></li>
							<li class="active"><a href="#">7</a></li>
							<li><a href="index8.php">8</a></li>
							<li><a href="index9.php">9</a></li>
							<li><a href="index8.php">&raquo;</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</section>
	
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