<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Mobil</title>
</head>
<body>
  <h2>Form Input Data Mobil</h2>
  <form action="proses_tambah.php" method="POST">
    <label>Merk:</label><br>
    <input type="text" name="merk" required><br><br>

    <label>Tipe:</label><br>
    <input type="text" name="tipe" required><br><br>

    <label>Tahun:</label><br>
    <input type="number" name="tahun" required><br><br>

    <label>Warna:</label><br>
    <input type="text" name="warna" required><br><br>

    <label>Harga (Rp):</label><br>
    <input type="number" name="harga" step="0.01" required><br><br>

    <button type="submit">Simpan</button>
  </form>

  <br>
  <a href="data_mobil.php">Lihat Data Mobil</a>
</body>
</html>
