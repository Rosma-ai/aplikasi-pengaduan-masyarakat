<?php
$username   = "root";
$passDB     = "";
$host       = "127.0.0.1";
$database   = "pengaduan_masyarakat";

$kon = mysqli_connect($host, $username, $passDB, $database);
if(!$kon) {
    echo "error connecting to database" .$database;

}
?>