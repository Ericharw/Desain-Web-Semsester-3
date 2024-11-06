<?php
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo " Huruf kecil ditemukan!";
} else {
    echo " Tidak ada huruf kecil!";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;

$pattern = '/go{1,2}d/';  // Mengubah pola regex untuk mencari 'g', diikuti 1 hingga 2 huruf 'o', dan diakhiri dengan 'd'.
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}