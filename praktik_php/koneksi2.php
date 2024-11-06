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

// Data yang ingin dimasukkan
$username = "nama_user"; // Ganti dengan username yang diinginkan
$password = "password_user"; // Ganti dengan password yang diinginkan

// Query untuk memasukkan data ke tabel user
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
