<?php
// Teks yang ingin ditulis
$isi = "Ini adalah catatan baru.\nBaris kedua catatan.";

// Menulis ke catatan.txt (jika belum ada, file akan dibuat)
file_put_contents('catatan.txt', $isi);

echo "Berhasil menulis ke catatan.txt.";
?>
