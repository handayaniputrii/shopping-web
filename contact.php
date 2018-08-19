<?php session_start();include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact | E-Shopper</title>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">      
    <link rel="shortcut icon" href="images/home/icon.png">
	<?php
	include 'koneksi.php'; 
	?>
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

	<br><br><br><br>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Lets Contact <strong>Us</strong></h2><br><br><br>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form role="form" action="aksi.php" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nama" class="form-control" placeholder="nama" required="required">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" placeholder="email" required="required"> 
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="pesan" id="message" required="required" placeholder="saran/pertanyaan/kritik" class="form-control" rows="8"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Sri-Shop Palembang.</p>
							<p>Palembang</p>
							<p>South Sumatera, Indonesia</p>
							<p>Line: srisumaryatiputri</p>
							<p>BBM: Ask owner</p>
							<p>instagram: @srishoppalembang</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/srie.ghokiel?fref=ts"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/sri_puputSri"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="https://instagram.com/sumaryatisri/"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->										
				
	<!--modal-->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Leave a replay</h4>
				</div>
				<div class="modal-body">
					<div class="replay-box">
						<div class="row">
								<form  class="form-signin" role="form" action="aksi_balas.php" method="post">
									<div class="text-area">
										<div class="blank-arrow">
											<label>Your Replay</label>
										</div>
										<textarea name="balas" rows="11"></textarea>
									</div>
									<div><input type="submit" name="submit" class="btn btn-primary" value="Submit"></div>
								</form>
						</div>
					</div><!--/Repaly Box-->
				</div>
			</div>
		</div>
	</div>
	<!--end of modal-->
				
	<section>
		<div class="container">
			<div class="row">
				<div class="response-area">
					<h2>Komentar</h2>
						<?php
							$query=mysql_query("select * from srishop_pesan");	
							while($lihat=mysql_fetch_array($query)){		
						?>
						<ul class="media-list">
							<li class="media">
								<a class="pull-left" href="#">
									<img width="50px" height="50px" class="media-object" src="images/home/tumblr_mz3dc7rDnb1tomvn7o1_400.gif" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i><?php echo $lihat['nama'] ?></li>
										<li><i class="fa fa-envelope"></i><?php echo $lihat['email'] ?></li>
									</ul>
									<p>	<?php echo $lihat['pesan'] ?></p>
										<?php
											if(isset($_SESSION['login'])){
											if($_SESSION['email']== 'admin@gmail.com'){
												echo'<a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href=""><i class="fa fa-reply"></i>Replay</a>';
											}
											}
									?>
								</div>
							<?php
									}?>
							</li>
								
									
							<?php
							$query=mysql_query("select * from srishop_balas");						
							while($lihat=mysql_fetch_array($query)){		
							?>
							<li class="media second-media">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/home/tumblr_musii07sTc1s2b3pko1_500.gif" alt="">
								</a>
								<div class="media-body">
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i>Sri-Shop</li>
									</ul>
									<p><?php echo $lihat['balas'] ?></p>
								</div>
							</li>
						</ul>
						<?php
							}
						?>
				</div><!--/Response-area-->
			</div>
		</div>
	</section>
				
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>