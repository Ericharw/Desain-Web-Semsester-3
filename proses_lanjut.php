<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buah = $_POST["buah"];
    $warna = isset($_POST["warna"]) ? $_POST["warna"] : [];
    $jenis_kelamin = isset($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : '';

    echo "Buah yang dipilih: " . htmlspecialchars($buah) . "<br>";
    echo "Warna favorit: " . (empty($warna) ? "Tidak ada" : implode(", ", $warna)) . "<br>";
    echo "Jenis kelamin: " . htmlspecialchars($jenis_kelamin);
} else {
    echo "Tidak ada data yang dikirim.";
}
?>
