<?php
include "koneksi.php";
$user  = $_POST['user'];
$pass  = $_POST['pass'];

$query = mysqli_query($kon,"SELECT * FROM masyarakat WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    header("Location:user/dashboard.php");
} else {
    header("Location:index.php");
}
?>