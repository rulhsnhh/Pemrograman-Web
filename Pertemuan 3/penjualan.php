<?php
// Data produk
$produk = [
    ["nama" => "Produk A", "harga" => 10000, "jumlah" => 5],
    ["nama" => "Produk B", "harga" => 7500, "jumlah" => 10],
    ["nama" => "Produk C", "harga" => 12000, "jumlah" => 8]
];

// Menghitung total penjualan dan total keseluruhan
$totalKeseluruhan = 0;
$totalJumlah = 0;

echo "<h2>Laporan Penjualan</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Harga Per Produk</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
      </tr>";

foreach ($produk as $item) {
    $total = $item["harga"] * $item["jumlah"];
    $totalKeseluruhan += $total;
    $totalJumlah += $item["jumlah"];
    
    echo "<tr>
            <td>{$item['nama']}</td>
            <td>{$item['harga']}</td>
            <td>{$item['jumlah']}</td>
            <td>{$total}</td>
          </tr>";
}

echo "<tr>
        <th colspan='2'>Total Penjualan</th>
        <th>{$totalJumlah}</th>
        <th>{$totalKeseluruhan}</th>
      </tr>";
echo "</table>";
?>