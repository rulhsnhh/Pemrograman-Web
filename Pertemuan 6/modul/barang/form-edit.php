<div class="row p-3">
    <div class="col">
        <?php
        $query = "SELECT * FROM barang WHERE id='$_GET[id]'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        ?>
        <h4>Form Edit Barang</h4>
        <form action="<?= 'modul/barang/proses.php?modul=barang&action=update&id='.$row['id'];?>" method="post">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?= $row['nama_barang'];?>">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" value="<?= $row['harga'];?>">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" name="stok" value="<?= $row['stok'];?>">
            <label for="kategori" class="form-label"><?= $row['kategori'];?></label>
            <select name="kategori" class="form-select mb-2">
                <option value="Food" <?= $row['kategori'] == 'Food'? 'selected' :''?>>Food</option>
                <option value="Fashion" <?= $row['kategori'] == 'Fashion'? 'selected' :''?>>Fashion</option>
                <option value="Farmasi" <?= $row['kategori'] == 'Farmasi'? 'selected' :''?>>Farmasi</option>
            </select>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
</div>