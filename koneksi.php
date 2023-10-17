<?php
$serverName = "localhost";
$userName = "webx7276_ivan";
$password = "ivanwahyu2813";
$dbname = "webx7276_raleway";

//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbname);

//cek koneksi
if(!$conn) {
    die("Koneksi gagal");
}

?>
