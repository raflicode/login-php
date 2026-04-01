<?php
// Hubungkan ke file koneksi
include 'koneksi.php';

if (isset($_POST['register'])) {
    // 1. Ambil data dari form frontend
    // mysqli_real_escape_string mencegah SQL Injection
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // 2. Enkripsi password (Wajib agar aman)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 3. Cek apakah email sudah ada di database
    $check_email = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    
    if (mysqli_num_rows($check_email) > 0) {
        // Jika email sudah ada, beri peringatan
        echo "<script>
                alert('Email sudah terdaftar! Gunakan email lain.');
                window.history.back();
              </script>";
    } else {
        // 4. Perintah SQL untuk MENYIMPAN (INSERT)
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
        
        if (mysqli_query($conn, $query)) {
            // Jika berhasil simpan, arahkan ke halaman login
            echo "<script>
                    alert('Registrasi Berhasil! Silakan Login.');
                    window.location.href='login.php';
                  </script>";
        } else {
            // Jika gagal karena error database
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    // Jika mencoba akses file ini tanpa klik tombol register
    header("Location: register.html");
}
?>