<?php
// Ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];

// Bentuk data yang mau disimpan
$data = "Nama: $nama\nNIM: $nim\nEmail: $email\n\n";

// Simpan ke file data.txt
file_put_contents('data.txt', $data, FILE_APPEND);

echo "Data berhasil disimpan!";
?>
