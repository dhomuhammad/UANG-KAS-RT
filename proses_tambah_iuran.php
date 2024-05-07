<?php
// Include file koneksi database
include 'db_config.php';

// Mengambil data yang dikirim melalui form
$tanggal = $_POST['tanggal'];
$warga_id = $_POST['warga_id'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];
$jenis_iuran = $_POST['jenis_iuran'];

// Query untuk memeriksa apakah warga_id ada dalam data_warga
$check_query = "SELECT id FROM data_warga WHERE id = '$warga_id'";
$check_result = mysqli_query($conn, $check_query);

// Cek jika warga_id tidak ada dalam data_warga
if (mysqli_num_rows($check_result) == 0) {
    // Jika tidak ada, tampilkan pesan error menggunakan JavaScript alert
    echo "<script>alert('Data kamu tidak ada, silahkan isi pada data warga'); window.location.href = 'data_warga.php';</script>";
} else {
    // Jika ada, lanjutkan proses penyimpanan data iuran ke dalam database
    // Query untuk menyimpan data iuran ke dalam database
    $query = "INSERT INTO iuran (tanggal, warga_id, nominal, keterangan, jenis_iuran) 
              VALUES ('$tanggal', '$warga_id', '$nominal', '$keterangan', '$jenis_iuran')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Cek jika query berhasil dieksekusi
    if ($result) {
        // Jika berhasil, redirect ke halaman iuran.php
        header("Location: iuran.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
