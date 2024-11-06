<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;



echo "Nilai A: {$a} <br>";
echo "Nilai B: {$b} <br><br>";

echo "Nilai awal \$a = $a dan \$b = $b <br><br>";
$a += $b;
echo "\$a += \$b : $a <br>";
$a -= $b;
echo "\$a -= \$b : $a <br>";
$a *= $b;
echo "\$a *= \$b : $a <br>";
$a /= $b;
echo "\$a /= \$b : $a <br>";
$a %= $b;
echo "\$a %= \$b : $a <br>";

echo "<br>";

$hasilIdentik = $a === $b;
echo "\$a === \$b : " . ($hasilIdentik ? 'True' : 'False') . "<br>";
$hasilTidakIdentik = $a !== $b;
echo "\$a !== \$b : " . ($hasilTidakIdentik ? 'True' : 'False') . "<br>";
echo "<br>";

echo "Hasil Penjumlahan (A + B): {$hasilTambah} <br>";
echo "Hasil Pengurangan (A - B): {$hasilKurang} <br>";
echo "Hasil Perkalian (A * B): {$hasilKali} <br>";
echo "Hasil Pembagian (A / B): {$hasilBagi} <br>";
echo "Sisa Bagi (A % B): {$sisaBagi} <br>";
echo "Hasil Pangkat (A ** B): {$pangkat} <br>";
echo "<br>";

echo "Apakah A sama dengan B? " . ($hasilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A tidak sama dengan B? " . ($hasilTidakSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih kecil dari B? " . ($hasilLebihKecil ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih besar dari B? " . ($hasilLebihBesar ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih kecil atau sama dengan B? " . ($hasilLebihKecilSama ? 'Ya' : 'Tidak') . "<br>";
echo "Apakah A lebih besar atau sama dengan B? " . ($hasilLebihBesarSama ? 'Ya' : 'Tidak') . "<br>";
echo "<br>";

echo "Hasil AND (A && B): " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil OR (A || B): " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Hasil NOT A (!A): " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Hasil NOT B (!B): " . ($hasilNotB ? 'True' : 'False') . "<br>";
?>
