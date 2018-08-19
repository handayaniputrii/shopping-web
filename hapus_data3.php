<?php
 
include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysql_query("delete from srishop_simpan where id=$id");
if ($hapus) {
    header("location:data2.php");
} else {
    echo "gagal menghapus";
}
?>
