<?php
include "../koneksi.php";
$id    = $_GET['id'];
$query = mysqli_query($kon,"DELETE FROM pengaduan WHERE id_pengaduan='$id'");
header("location:dashboard.php");
?>