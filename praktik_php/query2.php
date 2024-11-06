<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "prakwebdb"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$id = 1; 
$username = 'admin'; 
$password = '123'; 

$sql = "INSERT INTO user (id, username, password) VALUES ('$id', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
