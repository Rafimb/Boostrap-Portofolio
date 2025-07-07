<?php
// Informasi koneksi ke database
$servername = "localhost"; // Lokasi server database (biasanya localhost)
$username = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database
$dbname = "portofolio"; // Nama database yang digunakan

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}

// Menutup koneksi
$conn->close();
?>
