<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="">
        <label for="bilangan1">Masukkan Bilangan Pertama:</label>
        <input type="number" name="bilangan1" required><br><br>

        <label for="bilangan2">Masukkan Bilangan Kedua:</label>
        <input type="number" name="bilangan2" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];

        $penjumlahan = $bilangan1 + $bilangan2;
        $pengurangan = $bilangan1 - $bilangan2;
        $perkalian = $bilangan1 * $bilangan2;

        if ($bilangan2 != 0) {
            $pembagian = $bilangan1 / $bilangan2;
        } else {
            $pembagian = "Tidak dapat dibagi dengan 0";
        }

        echo "<h3>Hasil Operasi:</h3>";
        echo "Penjumlahan: " . $bilangan1 . " + " . $bilangan2 . " = " . $penjumlahan . "<br>";
        echo "Pengurangan: " . $bilangan1 . " - " . $bilangan2 . " = " . $pengurangan . "<br>";
        echo "Perkalian: " . $bilangan1 . " * " . $bilangan2 . " = " . $perkalian . "<br>";
        echo "Pembagian: " . $bilangan1 . " / " . $bilangan2 . " = " . $pembagian . "<br>";
    }
    ?>
</body>
</html>
