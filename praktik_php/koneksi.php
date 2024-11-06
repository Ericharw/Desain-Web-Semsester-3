<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "prakwebdb";

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah tabel user sudah ada
$result = mysqli_query($koneksi, "SHOW TABLES LIKE 'user'");
if (mysqli_num_rows($result) == 0) {
    // Query untuk membuat tabel user
    $sql = "CREATE TABLE user (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
    )";

    // Eksekusi query
    if (mysqli_query($koneksi, $sql)) {
        echo "Tabel user berhasil dibuat.";
    } else {
        echo "Error membuat tabel: " . mysqli_error($koneksi);
    }
} else {
    echo "Tabel user sudah ada, tidak perlu membuat lagi.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
