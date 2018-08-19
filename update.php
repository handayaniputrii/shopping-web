<?php
 
include 'koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$password = $_POST['password'];

$update = mysql_query("update srishop_pengunjung set jk='$jk', nama='$nama', password='$password', alamat='$alamat', email='$email' where id='$id'");
if ($update) {
    header("location:data.php");
} else {
    echo "gagal mengupdate data";
}
?>
