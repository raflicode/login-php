<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // CEK ADMIN
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['pass'])) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['id_admin'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = 'admin';

            header("Location: halaman_admin.php");
            exit;
        }
    }

    // CEK CLIENT
    $result = mysqli_query($conn, "SELECT * FROM client WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['pass'])) {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $row['id_client'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = 'client';

            header("Location: halaman.php");
            exit;
        }
    }

    header("Location: login.php?error=Email atau password salah!");
    exit;

} else {
    header("Location: login.php");
    exit;
}