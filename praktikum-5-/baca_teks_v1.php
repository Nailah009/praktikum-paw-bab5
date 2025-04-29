<?php
// Membaca isi file data.txt menggunakan file_get_contents
$isi_file = file_get_contents('data.txt');

// Menampilkan isi file
echo nl2br($isi_file);
?> 
