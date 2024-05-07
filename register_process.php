<?php
// Proses registrasi

// Include file koneksi database
include_once 'db_config.php';

// Ambil data dari form
$username = $_POST['username'];
$password = md5($_POST['password']); // Menggunakan MD5 untuk mengenkripsi kata sandi

// Query untuk menyimpan data ke database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    // Registrasi berhasil, arahkan pengguna kembali ke halaman login
    mysqli_close($conn);
    // Tampilkan pesan alert
    echo '<script>alert("Registrasi berhasil!"); window.location.href = "login.php";</script>';
    exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
