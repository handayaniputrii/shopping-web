<?php
 
include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysql_query("delete from srishop_pengunjung where id=$id");
if ($hapus) {
    header("location:data.php");
} else {
    echo "gagal menghapus";
}
?>
