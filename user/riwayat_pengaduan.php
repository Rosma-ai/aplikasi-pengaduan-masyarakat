<!DOCTYPE html>
<html lang="en">
<?php include ("templates/head.php"); ?>

<body>
<?php include ("templates/menu.php"); ?>
<hr>

<h3>RIWAYAT PENGADUAN</h3>
<table border="1">
    <tr>
        <td>No</td>
        <td>Tanggal Pengaduan</td>
        <td>NIK</td>
        <td>Isi Laporan</td>
        <td>Foto</td>
        <td>Status</td>
    </tr>
    <?php
    include "../koneksi.php";
    $no=1;
    $query=mysqli_query($kon,"SELECT * FROM pengaduan where status='selesai'");
    while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data ['tgl_pengaduan']; ?></td>
        <td><?php echo $data ['nik']; ?></td>
        <td><?php echo $data ['isi_laporan']; ?></td>
        <td><img src="gambar/<?php echo $data ['foto']; ?>" width="150px"></td>
        <td><?php echo $data['status'];?></td>
    </tr>
   <?php } ?> 
</table>
</body>
</html>