<?php
$mysqli = new mysqli("localhost", "root", "", "dbpenjualan1");
if ($mysqli->connect_error) {
    die("Koneksi gagal :".$mysqli->connect_error);
}
?>