<div class="row p-3">
    <div class="col">
        <h4>Form Input Barang</h4>
        <form action="modul/barang/proses.php?modul=barang&action=tambah" method="post">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang"> </br>
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga"> </br>
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" name="stok"> </br>
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-select mb-2">
                <option value="Food">Food</option>
                <option value="Fashion">Fashion</option>
                <option value="Farmasi">Farmasi</option>
            </select>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>