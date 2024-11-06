<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTerendah = array_slice($nilaiSiswa, 0, 2);
$nilaiTertinggi = array_slice($nilaiSiswa, -2);
$nilaiTersisa = array_diff($nilaiSiswa, $nilaiTerendah, $nilaiTertinggi);
$totalNilai = array_sum($nilaiTersisa);
$jumlahNilaiTersisa = count($nilaiTersisa);

$rataRata = $jumlahNilaiTersisa > 0 ? $totalNilai / $jumlahNilaiTersisa : 0;

echo "Total nilai yang digunakan untuk menghitung rata-rata: $totalNilai <br>";
echo "Rata-rata nilai setelah mengabaikan dua tertinggi dan dua terendah: " . round($rataRata, 2);
?>