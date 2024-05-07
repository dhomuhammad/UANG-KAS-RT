<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Iuran</title>
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
        <h2>Tambah Data Iuran</h2>
        <div class="form-container">
            <form action="proses_tambah_iuran.php" method="post">
                <div class="input-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>
                <div class="input-group">
                    <label for="warga_id">Warga ID:</label>
                    <input type="text" id="warga_id" name="warga_id" required>
                </div>
                <div class="input-group">
                    <label for="nominal">Nominal:</label>
                    <input type="number" id="nominal" name="nominal" required>
                </div>
                <div class="input-group">
                    <label for="keterangan">Keterangan:</label>
                    <input type="text" id="keterangan" name="keterangan">
                </div>
                <div class="input-group">
                    <label for="jenis_iuran">Jenis Iuran:</label>
                    <input type="text" id="jenis_iuran" name="jenis_iuran" required>
                </div>
                <button type="submit" class="btn-submit">Tambah Data</button>
            </form>
        </div>
    </div>
</body>
</html>
