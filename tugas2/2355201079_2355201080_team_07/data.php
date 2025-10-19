<?php
include 'koneksi.php'; // koneksi sudah include port 3307

// Cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil semua data dari tabel kost
$query = "SELECT * FROM kost";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kost</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffecd2, #fcb69f);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
      padding: 20px;
    }
    h2 {
      color: #333;
      margin-bottom: 20px;
    }
    table {
      border-collapse: collapse;
      width: 90%;
      max-width: 800px;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }
    th {
      background-color: #007bff;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    a {
      text-decoration: none;
      color: white;
      background-color: #007bff;
      padding: 8px 12px;
      border-radius: 8px;
      display: inline-block;
      margin: 10px 0;
    }
    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h2>Data Kost</h2>

  <a href="form.php">+ Tambah Data Kost</a>

  <table>
    <tr>
      <th>No</th>
      <th>Nama Kost</th>
      <th>Jumlah Kamar</th>
      <th>Status</th>
      <th>Alamat</th>
      <th>No HP</th>
    </tr>

    <?php
    // Tampilkan data jika ada
    if (mysqli_num_rows($result) > 0) {
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$row['nama_kost']}</td>
                <td>{$row['jumlah_kamar']}</td>
                <td>{$row['status']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['no_hp']}</td>
              </tr>";
        $no++;
      }
    } else {
      echo "<tr><td colspan='6' style='text-align:center;'>Belum ada data kost.</td></tr>";
    }

    // Tutup koneksi
    mysqli_close($koneksi);
    ?>
  </table>

</body>
</html>
