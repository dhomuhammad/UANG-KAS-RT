<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
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
        <h2>Data Warga</h2>
        <table class="full-width-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>No Rumah</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include file koneksi database
                include_once 'db_config.php';

                // Query untuk mendapatkan data warga dari database
                $sql = "SELECT * FROM data_warga";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nik"] . "</td>";
                        echo "<td>" . $row["nama"] . "</td>";
                        echo "<td>" . $row["jenis_kelamin"] . "</td>";
                        echo "<td>" . $row["no_hp"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "<td>" . $row["no_rumah"] . "</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data warga</td></tr>";
                }

                mysqli_close($conn);
                ?>
            </tbody>
            <a href="tambah_data_warga.php" class="btn-tambah">Tambah Data</a>
        </table>
    </div>
</body>
</html>
