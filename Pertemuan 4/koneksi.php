<?php
// try {
//     $pdo = new PDO("mysql:host=localhost;dbname:dbpenjualan","root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi Ke database berhasil";
// } catch (PDOException $e) {
//     echo "Koneksi gagal : ".$e->getMessage();
// }

$mysqli = new mysqli("localhost", "root", "", "dbpenjualan");
if($mysqli->connect_error) {
    die("Koneksi gagal :".$mysqli->connect_error);
}
?>