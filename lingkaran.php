<?php
define("PI", 3.14);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $radius = $_POST['radius'];

    $area = PI * $radius * $radius;

    echo "Luas lingkaran dengan jari-jari " . $radius . " adalah: " . $area;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h2>Hitung Luas Lingkaran</h2>
    <form method="post" action="">
        <label for="radius">Masukkan Jari-jari Lingkaran:</label>
        <input type="number" name="radius" required>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>