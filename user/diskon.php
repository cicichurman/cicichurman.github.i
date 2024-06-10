<?php

// Fungsi untuk menghitung diskon
function hitungDiskon($harga, $diskon) {
    $jumlahDiskon = $harga * ($diskon / 100);
    $hargaSetelahDiskon = $harga - $jumlahDiskon;
    return $hargaSetelahDiskon;
}

// Contoh penggunaan fungsi hitungDiskon
$hargaBarang = 100000; // Harga barang sebelum diskon
$persentaseDiskon = 10; // Persentase diskon

$hargaSetelahDiskon = hitungDiskon($hargaBarang, $persentaseDiskon);

// Output
echo "Harga barang sebelum diskon: Rp " . number_format($hargaBarang, 0, ',', '.') . "<br>";
echo "Persentase diskon: " . $persentaseDiskon . "%<br>";
echo "Harga setelah diskon: Rp 2000" . number_format($hargaSetelahDiskon, 0, ',', '.');

?>
