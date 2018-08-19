<?php
 
include 'koneksi.php';

$balas = $_POST['balas'];
$input = mysql_query("insert into srishop_balas values('$id','$balas')");
if ($input) {
    header("location:contact.php");
}
 else
{
    echo "gagal";
}
?>