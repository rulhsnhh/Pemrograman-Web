<?php
include "koneksi.php";
$query = "SELECT * FROM barang WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Barang</title>
</head>
<body>
    <h1>Form Edit Barang</h1>
    <form action="<?= 'update-data.php?id='.$row['id'];?>" method="post">
        <label for="Nama_barang">Nama Barang</label>
        <input type="text" name="Nama_barang" value="<?= $row['Nama_barang'];?>"> </br>

        <label for="Harga">Harga</label>
        <input type="number" name="Harga" value="<?= $row['Harga'];?>"> </br>

        <label for="Stock">Stok</label>
        <input type="number" name="Stock" value="<?= $row['Stock'];?>"> </br>

        <label for="Kategori">Kategori</label>
        <label for=""><?= $row['Kategori'];?></label>
        <select name="Kategori">
            <option value="Food" <?= $row['Kategori'] == 'Food'? 'selected' :''?>>Food</option>
            <option value="Fashion" <?= $row['Kategori'] == 'Fashion'? 'selected' :''?>>Fashion</option>
            <option value="Farmasi" <?= $row['Kategori'] == 'Farmasi'? 'selected' :''?>>Farmasi</option>
        </select>
        <button>Update</button>
    </form>
</body>
</html>