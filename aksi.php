<?php
 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$input = mysql_query("insert into srishop_pesan values('$id','$nama','$email','$pesan')");
if ($input) {
    header("location:contact.php");
}
 else
{
    echo "gagal";
}
?>