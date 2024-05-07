<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Iuran Kas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="data_warga.php">Data Warga</a>
        <a href="iuran.php">Iuran</a>
        <div class="logout-container">
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>
    <div class="container">
        <h2>Data Iuran Kas</h2>
        <table class="full-width-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Warga ID</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                    <th>Jenis Iuran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file koneksi database
                include 'db_config.php';

                // Query untuk mengambil data iuran dari tabel iuran
                $sql = "SELECT * FROM iuran";
                $result = mysqli_query($conn, $sql);

                // Loop untuk menampilkan data iuran dalam tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['tanggal']."</td>";
                    echo "<td>".$row['warga_id']."</td>";
                    echo "<td>".$row['nominal']."</td>";
                    echo "<td>".$row['keterangan']."</td>";
                    echo "<td>".$row['jenis_iuran']."</td>";
                    echo "</tr>";
                }

                // Menutup koneksi database
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <a href="tambah_iuran.php" class="btn-tambah">Tambah Data</a>
    </div>
</body>
</html>
