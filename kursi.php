<?php
    $totalKursi = 50; 
    $kursiTerisi = 28; 
    $kursiKosong = $totalKursi - $kursiTerisi;

    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;
    
    echo "Jumlah Total Kursi: $totalKursi <br>";
    echo "Jumlah Kursi Terisi: $kursiTerisi <br>";
    echo "Jumlah Kursi Kosong: $kursiKosong <br>";
    echo "Persentase Kursi yang Masih Kosong: " . round($persentaseKosong, 2) . "% <br>";
?>