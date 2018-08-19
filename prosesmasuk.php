<?php		
	include 'koneksi.php';
		
	session_start();
	
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		$query=mysql_query("select * from srishop_pengunjung where email='".$_POST['email']."'");								
		$lihat=mysql_fetch_array($query);
	
		if($lihat['password'] == ($_POST['password']) && $lihat['email'] == ($_POST['email']))
		{
			$_SESSION['login'] = true;
			$_SESSION['email'] = $lihat['email'];
			$_SESSION['nama'] = $lihat['nama'];
			$_SESSION['alamat'] = $lihat['alamat'];
			unset($_SESSION['error']);
			header('location:index.php');
		}
		else
		{
		$_SESSION['error'] = '<div class="alert alert-danger">E-mail atau password salah!</div>';
		header('Location: login.php?error');
		}
	}
	else
	{
		$_SESSION['error'] = '<div class="alert alert-danger">E-mail atau password wajib diisi!</div>';
		header('Location: login.php?error');
	}
?>