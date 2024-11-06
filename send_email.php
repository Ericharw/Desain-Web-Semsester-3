<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars($_POST["subject"], ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');
    if (function_exists('mail')) {
        echo "Berhasil Dikirim!";
    } else {
            echo "Terjadi Kesalahan Saat Dikirim!.";
        }
    } else {
        echo "Alamat email tidak valid!";
}
