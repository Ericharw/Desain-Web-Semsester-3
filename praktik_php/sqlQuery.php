<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb"; 

$connect = mysqli_connect($namaHost, $username, $password, $database);

if ($connect) {
    $sql = "CREATE TABLE user (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";
    
    if (mysqli_query($connect, $sql)) {
        echo "Tabel user berhasil dibuat.";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
} else {
    echo "Koneksi dengan MySQL gagal: " . mysqli_connect_error();
}

mysqli_close($connect);
?>
