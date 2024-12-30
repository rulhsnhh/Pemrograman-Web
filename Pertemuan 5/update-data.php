<?php
include "koneksi.php";
$nama_barang = $_POST['Nama_barang'];
$harga = $_POST['Harga'];
$stok = $_POST['Stock'];
$kategori = $_POST['Kategori'];
$query = "UPDATE barang SET
Nama_barang='$nama_barang',
Harga='$harga',
Stock='$stok',
Kategori='$kategori'
where id='$_GET[No]'
";
$mysqli->query($query);
header('location:index.php');
?>