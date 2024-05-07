<?php
// Proses login

// Include file koneksi database
include_once 'db_config.php';

// Ambil data dari form
$username = mysqli_real_escape_string($conn, $_POST['username']); // Hindari SQL injection
$password = mysqli_real_escape_string($conn, $_POST['password']); // Hindari SQL injection dan enkripsi kata sandi

// Enkripsi kata sandi
$password = md5($password);

// Query untuk memeriksa apakah pengguna ada dalam database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Cek jumlah baris yang dikembalikan
    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, arahkan pengguna ke halaman data_warga.php
        header("Location: data_warga.php");
        exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
    } else {
        // Login gagal, arahkan pengguna kembali ke halaman login dengan pesan error
        header("Location: login.php?error=1");
        exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
    }
} else {
    // Jika terjadi kesalahan dalam menjalankan query
    die("Query gagal: " . mysqli_error($conn));
}

mysqli_close($conn);
?>
