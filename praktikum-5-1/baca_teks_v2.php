<?php
// Membuka file data.txt
$file = fopen('data.txt', 'r');

// Membaca file baris per baris
if ($file) {
    while (($baris = fgets($file)) !== false) {
        echo nl2br($baris);
    }
    fclose($file);
} else {
    echo "Gagal membuka file.";
}
?>
