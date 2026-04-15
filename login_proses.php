<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Pastikan password di database sudah di-hash pakai password_hash()
        if (password_verify($password, $row['pass'])) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['id'];
            
            header("Location: halaman.php");
            exit;
        }
    }
    
    // Jika gagal, lempar balik ke login.php dengan pesan error
    header("Location: login.php?error=Email atau password salah!");
    exit;
} else {
    // Jika akses file ini tanpa mencet tombol login
    header("Location: login.php");
    exit;
}