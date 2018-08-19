<?php
	session_start();

	$_SESSION = array();
	session_destroy();

	include'koneksi.php';		
			
	header('Location: index.php');
?>