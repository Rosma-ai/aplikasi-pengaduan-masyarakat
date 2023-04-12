<!DOCTYPE html>
<html lang="en">
<?php include ("templates/head.php"); ?>

<body>
<?php include ("templates/menu.php"); ?>
<hr>
<h3>Tulis Pengaduan</h3>
<form action="scr_pengaduan.php" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td><input type="date" name="tgl"></td>
    </tr>
    <tr>
        <td><input type="nik" name="nik" placeholder="Masukan NIK"></td>
    </tr>
    <tr>
        <td><textarea  name="isi" row="7"></textarea></td>
    </tr>
    <tr>
        <td><input type="file" name="foto"></td>
    </tr>
    <tr>
        <td><input type="submit" value="KIRIM PENGADUAN"></td>
    </tr>
</table>
</form>
<hr>
<h3>DATA PENGADUAN</h3>
<table border="1">
    <tr>
        <td>No</td>
        <td>Tanggal Pengaduan</td>
        <td>NIK</td>
        <td>Isi Laporan</td>
        <td>Foto</td>
        <td>Aksi</td>
    </tr>
    <?php
    include "../koneksi.php";
    $no=1;
    $query=mysqli_query($kon,"SELECT * FROM pengaduan where status='0' or status='proses'");
    while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data ['tgl_pengaduan']; ?></td>
        <td><?php echo $data ['nik']; ?></td>
        <td><?php echo $data ['isi_laporan']; ?></td>
        <td><img src="gambar/<?php echo $data ['foto']; ?>" width="150px"></td>
        <td>
            <a href="ubah_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>">Ubah</a> |
            <a href="scr_hapus_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>">Hapus</a></td>
    </tr>
   <?php } ?> 
</table>
</body>
</html>