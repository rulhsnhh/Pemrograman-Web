<?php
include "koneksi.php";
$nama_barang = $_GET['Nama_barang'];
$harga = $_GET['Harga'];
$stok = $_GET['Stock'];
$kategori = $_GET['Kategori'];
$query = "INSERT INTO barang (Nama_barang, Harga, Stock, Kategori)
VALUES (
'$nama_barang',
'$harga',
'$stok',
'$kategori'
)";
$mysqli->query($query);
header('location:index.php'); 
?>