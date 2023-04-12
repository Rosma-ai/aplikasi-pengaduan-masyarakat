<?php
include "../koneksi.php";

$tgl = $_POST['tgl'];
$nik = $_POST['nik'];
$isi = $_POST['isi'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:dashboard.php");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($kon, "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto)
        VALUES ('','$tgl','$nik','$isi','$xx')");
		header("location:dashboard.php");
	}else{
		header("location:dashboard.php");
	}
}


?>