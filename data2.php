<?php include 'koneksi.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data Pembelian | Sri-Shop</title>
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
	
	<section id="about">
		<div class="container">
			<div>
				<center><br><br><font color="orange" size="6">Data Pembelian Pelanggan</font></center><!--tabel-->
				<br><table class="table table-hover">
					<tr class="danger">
						<th>No</th>
						<th>Nama Pembeli</th>
						<th>Telepon</th>
						<th>Alamat</th>
						<th>Alamat Email</th>
						<th>Kode Barang</th>
						<th>Jumlah Barang</th>
						<th>Total Harga</th>
						<th>Edit</th>
					</tr>		
					<?php
						$query=mysql_query("select * from srishop_checkout");	
						$no=1;										
						while($lihat=mysql_fetch_array($query)){		
					?>		
					<tr>
						<td><?php echo $no++; ?></td>				
						<td><?php echo $lihat['nama'] ?></td>		
						<td><?php echo $lihat['telepon'] ?></td>
						<td><?php echo $lihat['alamat'] ?></td>		
						<td><?php echo $lihat['email'] ?></td>
						<td><?php echo $lihat['kodebarang'] ?></td>				
						<td><?php echo $lihat['jumlah'] ?></td>	
						<td><?php echo $lihat['harga'] ?></td>
						<td><a href="hapus_data2.php?id=<?php echo $lihat['idorder'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a></td>   
					</tr>
					<?php
						}
					?>
				</table>
				
				<br>
				
				<center><br><br><font color="orange" size="6">Keterangan Barang</font></center><!--tabel-->
				<br><table class="table table-hover">
					<tr class="success">
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Keterangan</th>
						<th>Harga</th>
						<th>Pilihan</th>
					</tr>		
					<?php
						$query=mysql_query("select * from srishop_simpan");	
						$no=1;										
						while($lihat=mysql_fetch_array($query)){		
					?>		
					<tr>				
						<?php if($lihat['id'] > 9){?>
							<td>0<?php echo $lihat['id'];}?></td>
						<?php if($lihat['id'] <= 9){?>
							<td>00<?php echo $lihat['id'];}?></td>	
						<td><?php echo $lihat['title'] ?></td>
						<td><?php echo $lihat['keterangan'] ?></td>		
						<td>Rp.<?php echo $lihat['harga'] ?></td>
						<td><a href="hapus_data3.php?id=<?php echo $lihat['id'] ?>" class="btn btn-info"><i class="glyphicon glyphicon-trash"></i> Hapus</a></td> 
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
    </section><!--/#about-->
	
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