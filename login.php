<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Cek email dan password yang diinput
        if ($email === 'admin@admin.com' && $password === 'admin') {
            // Jika login berhasil, arahkan ke dashboard.php
            header('Location: dashboard.php');
            exit(); // Menghentikan eksekusi script setelah redirect
        } else {
            // Jika login gagal, tampilkan alert menggunakan JavaScript
            echo "<script>alert('Email atau password salah');</script>";
        }
    }
?>