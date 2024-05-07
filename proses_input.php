<?php
// Include file koneksi database
include_once 'db_config.php';

// Ambil data yang dikirim melalui form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$no_rumah = $_POST['no_rumah'];
$status = $_POST['status'];

// Query untuk menyimpan data ke database
$sql = "INSERT INTO data_warga (nik, nama, jenis_kelamin, no_hp, alamat, no_rumah, status) 
        VALUES ('$nik', '$nama', '$jenis_kelamin', '$no_hp', '$alamat', '$no_rumah', '$status')";

if (mysqli_query($conn, $sql)) {
    // Jika data berhasil disimpan, arahkan kembali ke halaman data warga
    header("Location: data_warga.php");
    exit(); // Pastikan tidak ada kode PHP lain yang dieksekusi setelah ini
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
