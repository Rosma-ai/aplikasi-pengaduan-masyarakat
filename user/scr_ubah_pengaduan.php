<?php
include "../koneksi.php";
$id     =$_POST['id'];
$tgl    = $_POST['tgl'];
$nik    = $_POST['nik'];
$isi    = $_POST['isi'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext, $ekstensi) ) {
    $query=mysqli_query($kon, "UPDATE pengaduan SET tgl_pengaduan='$tgl', nik='$nik', isi_laporan='$isi'
        WHERE id_pengaduan='$id'");
	header("location:dashboard.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		$query=mysqli_query($kon, "UPDATE pengaduan SET tgl_pengaduan='$tgl', nik='$nik', isi_laporan='$isi', foto='$xx'
        WHERE id_pengaduan='$id'");
		header("location:dashboard.php");
	}else{
		header("location:dashboard.php");
	}
}
?>