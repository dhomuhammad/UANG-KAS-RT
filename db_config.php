<?php
// File untuk konfigurasi koneksi database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kas";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
