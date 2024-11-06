<?php
$hargaProduk = 120000;
$diskon = 0.20;

if ($hargaProduk > 100000) {
    $jumlahDiskon = $hargaProduk * $diskon; 
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon; 
} else {
    $hargaSetelahDiskon = $hargaProduk; 
}

echo "Harga produk sebelum diskon: Rp " . number_format($hargaProduk, 2, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($jumlahDiskon ?? 0, 2, ',', '.') . "<br>"; 
echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 2, ',', '.');
?>