<?php
// Membuka file catatan.txt untuk mode append (a)
$file = fopen('catatan.txt', 'a');

if ($file) {
    // Teks yang ingin ditambahkan
    $tambahan = "\nIni baris tambahan.";
    fwrite($file, $tambahan);

    fclose($file);
    echo "Berhasil menambahkan isi ke catatan.txt.";
} else {
    echo "Gagal membuka file.";
}
?>
