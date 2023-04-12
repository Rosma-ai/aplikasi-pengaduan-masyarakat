<!DOCTYPE html>
<html lang="en">
<?php include ("templates/head.php"); ?>

<body>
<?php include ("templates/menu.php"); ?>
<hr>
<h3>Ubah Pengaduan</h3>
<?php include "../koneksi.php";
$query = mysqli_query($kon, "SELECT * FROM pengaduan");
while($data=mysqli_fetch_array($query)) {
?>

<form action="scr_ubah_pengaduan.php" method="POST" enctype="multipart/form-data">
<table>
    <tr>
        <td>
            <input type="hidden" name="id" value="<?php echo $data['id_pengaduan'];?>">
            <input type="date" name="tgl" value="<?php echo $data['tgl_pengaduan'];?>">
        </td>
    </tr>
    <tr>
        <td><input type="nik" name="nik" value="<?php echo $data['nik'];?>"></td>
    </tr>
    <tr>
        <td><textarea  name="isi" row="7"><?php echo $data['isi_laporan'];?></textarea></td>
    </tr>
    <tr>
        <td><input type="file" name="foto"></td>
    </tr>
    <tr>
    <td><img src="gambar/<?php echo $data ['foto']; ?>" width="150px"></td>
    </tr>
    <tr>
        <td><input type="submit" value="KIRIM PENGADUAN"></td>
    </tr>
</table>
</form>
<?php
}
?>
</body>
</html>