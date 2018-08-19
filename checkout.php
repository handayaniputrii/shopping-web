<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
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
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
	
		<?php
			$nama = $_POST['nama'];
			$telepon = $_POST['telepon'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$kodebarang = "";
			$jumlah = "";
			$harga = 0;
			$idorder;
			$email = $_SESSION['login'];	
			include 'koneksi.php';
				
			$sql = "SELECT * FROM srishop_cart WHERE pengunjung='$email'";
			$hasil = mysql_query($sql) or die (mysql_error());
				
			while($row = mysql_fetch_array($hasil))
			{
				$kodebarang = $kodebarang.$row['kodebarang']." / ";
				$jumlah = $jumlah.$row['jumlah']." / ";
				$harga = $harga+$row['harga'];
			}
			$sql = "insert into srishop_checkout values('','$nama','$alamat','$kodebarang','$jumlah','$telepon','$email','$harga')";
			$hasil = mysql_query($sql) or die (mysql_error());
				
			$sql = "select * from srishop_checkout where idorder = ".mysql_insert_id();
			$hasil = mysql_query($sql) or die (mysql_error());
					
			while($row = mysql_fetch_array($hasil))
			{
				$idorder = $row['idorder'];
			}
		?>
		
	<div class="tabbed">
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
				<br>
				
				<br><br><br>
				<h1 align="center"> YOUR ORDER </h1>
				<br> <br>
				
				<center>
					<table cellspacing="0">
						<tr>
							<td width="150"> Order ID </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$idorder" ?> </td>
						</tr>
						<tr>
							<td width="150"> Name </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$nama" ?> </td>
						</tr>
						
						<tr>
							<td width="150"> Address </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$alamat" ?> </td>
						</tr>
						
						<tr>
							<td width="150"> Tlp./HP </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$telepon" ?> </td>
						</tr>
						
						<tr>
							<td width="150"> E-mail </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$email" ?> </td>
						</tr>
						
						<tr>
							<td width="150"> Item Number </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$kodebarang" ?> </td>
						</tr>
						
						<tr>
							<td width="150"> Quantity </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$jumlah" ?> </td>
						</tr>
						
						
						<tr>
						</tr>
						<tr>
							<td width="150"> Total Price </td>
							<td width="20"> : </td>
							<td width="200"> <?php echo "$harga" ?> </td>
						</tr>
					</table>
				</center>
				
				<br> <br>
				<center>
					<p> Thank you for shopping at our website, please confirm your payment to our contact </p><br>
					<p> <a href="index.php" class="btn btn-info" > Click here to continues buying </a></p>
				</center>
				
              <div class="cl">&nbsp;</div>
            </div>
          </div>
        </div>
				
			</div>
		</div>
	</section> <!--/#cart_items-->

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
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>