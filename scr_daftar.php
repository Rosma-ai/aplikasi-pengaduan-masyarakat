<?php

include "koneksi.php";
$nik    = $_POST['nik'];
$nama   = $_POST['nama'];
$user   = $_POST['user'];
$pass   = $_POST['pass'];
$telp   = $_POST['telp'];

$query =mysqli_query($kon,"INSERT INTO masyarakat values('$nik', '$nama', '$user', '$pass', '$telp')");
$data = mysqli_fetch_array($query);

if ($query) {
    header("Location:index.php");
} else {
    header("Location:daftar.php");
}
?>