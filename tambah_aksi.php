<?php
 
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$password = $_POST['password'];

$input = mysql_query("insert into srishop_pengunjung values('$id', '$nama','$password', '$alamat','$email',NOW(),'$jk')");
if ($input) {
    header("location:login.php");
}
 else
{
    echo "gagal";
}
?>
