<?php
// 1. Definisikan identitas database
$host = "localhost";
$user = "root";
$pass = "root";
$db   = "login sistem"; // <--- PASTIKAN NAMA INI SAMA DENGAN DI PHPMYADMIN

// 2. Buat koneksi dan simpan ke variabel $conn
$conn = mysqli_connect($host, $user, $pass, $db);

// 3. Cek apakah koneksi berhasil
if (!$conn) {
    // Jika gagal, tampilkan pesan errornya apa
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Jika berhasil, variabel $conn sekarang sudah "hidup" dan bisa dipakai file lain
?>