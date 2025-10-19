<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Tiket Bioskop</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      min-height: 100vh;
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h2 {
      margin-bottom: 25px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .table-container {
      width: 95%;
      max-width: 950px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 20px 30px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.3);
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      color: #fff;
      font-size: 15px;
    }

    thead {
      background: rgba(0, 188, 212, 0.3);
    }

    thead th {
      padding: 12px 10px;
      text-align: left;
      font-weight: 600;
    }

    tbody tr {
      border-bottom: 1px solid rgba(255,255,255,0.15);
      transition: background 0.3s;
    }

    tbody tr:hover {
      background: rgba(255, 255, 255, 0.1);
    }

    tbody td {
      padding: 10px;
    }

    a.back-link {
      margin-top: 25px;
      color: #00bcd4;
      text-decoration: none;
      transition: 0.3s;
    }

    a.back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h2>Daftar Tiket Dipesan</h2>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Film</th>
          <th>Jam Tayang</th>
          <th>Studio</th>
          <th>Kursi</th>
          <th>Metode</th>
          <th>Tanggal</th>
          <th>Jumlah Tiket</th>
          <th>Harga Tiket</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // === Koneksi langsung tanpa file koneksi.php ===
        $konek = mysqli_connect("localhost", "root", "", "bioskop");
        if (!$konek) {
          die("<tr><td colspan='9'>Koneksi gagal: " . mysqli_connect_error() . "</td></tr>");
        }

        // === Ambil data dari tabel film ===
        $query = "SELECT * FROM film ORDER BY id DESC";
        $result = mysqli_query($konek, $query);

        if (mysqli_num_rows($result) > 0) {
          $no = 1;
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['judul_film']}</td>
                    <td>{$row['jam_tayang']}</td>
                    <td>{$row['studio']}</td>
                    <td>{$row['kursi']}</td>
                    <td>{$row['metode_pembayaran']}</td>
                    <td>{$row['tanggal_pembelian']}</td>
                    <td>{$row['jumlah_tiket']}</td>
                    <td>{$row['harga_tiket']}</td>
                  </tr>";
            $no++;
          }
        } else {
          echo "<tr><td colspan='9' style='text-align:center;'>Belum ada data tiket</td></tr>";
        }

        mysqli_close($konek);
        ?>
      </tbody>
    </table>
  </div>

  <a href="index.php" class="back-link">⬅ Kembali ke Form Pemesanan</a>
</body>
</html>