<!DOCTYPE html>
<html>
<head>
    <title>Input Aman dengan PHP</title>
</head>
<body>
    <h2>Input Aman dengan PHP</h2>

    <?php
    // Inisialisasi variabel
    $input = "";
    $email = "";
    $emailErr = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil input dan konversi karakter khusus agar aman
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');

        // Cek apakah email ada di dalam $_POST sebelum melakukan validasi
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            // Validasi email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Hasil input yang aman: " . $input . "<br>";
                echo "Email valid: " . htmlspecialchars($email);
            } else {
                $emailErr = "Email tidak valid!";
            }
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Masukkan sesuatu:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>
        
        <label for="email">Masukkan email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"><br>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
