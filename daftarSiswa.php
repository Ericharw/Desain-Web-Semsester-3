<?php
$daftarSiswa = [
    ['Alice', 85],
    ['Bob', 95],
    ['Charlie', 78],
    ['David', 62],
    ['Eva', 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarSiswa);

foreach ($daftarSiswa as $siswa) {
    $totalNilai += $siswa[1]; 
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . round($rataRata, 2) . "<br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo $siswa[0] . ": " . $siswa[1] . "<br>";
    }
}
?>
