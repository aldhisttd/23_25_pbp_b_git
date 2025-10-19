<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan Tiket Bus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
  <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan Tiket Bus</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74b9ff, #a29bfe);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: white;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      color: #0984e3;
      margin-bottom: 20px;
      font-weight: 600;
    }

    label {
      display: block;
      text-align: left;
      margin-top: 10px;
      font-weight: 500;
      color: #2d3436;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #dcdde1;
      border-radius: 10px;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border-color: #6c5ce7;
      box-shadow: 0 0 5px rgba(108, 92, 231, 0.5);
    }

    button {
      margin-top: 20px;
      background: linear-gradient(135deg, #6c5ce7, #0984e3);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      cursor: pointer;
      font-weight: 600;
      transition: 0.3s;
    }

    button:hover {
      background: linear-gradient(135deg, #0984e3, #6c5ce7);
      transform: scale(1.05);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 8px;
      border: 1px solid #dfe6e9;
      font-size: 14px;
    }

    th {
      background: #6c5ce7;
      color: white;
    }

    td {
      background: #f1f2f6;
    }

    .no-data {
      color: gray;
      font-style: italic;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Pemesanan Tiket Bus</h2>
    <form action="proses.php" method="post">
      <label>Nama:</label>
      <input type="text" name="nama" required>

      <label>Tujuan:</label>
      <input type="text" name="tujuan" required>

      <label>Tanggal:</label>
      <input type="date" name="tanggal" required>

      <label>Jumlah Tiket:</label>
      <input type="number" name="jumlah" min="1" required>

      <label>Harga Tiket:</label>
      <input type="number" name="harga" min="0" required>

      <button type="submit">Pesan</button>
    </form>

    <hr style="margin: 25px 0;">

    <h3>Daftar Pemesanan</h3>
    <?php
    include 'koneksi.php';
    $res = $conn->query("SELECT * FROM tiket_bus ORDER BY id DESC");
    if ($res && $res->num_rows > 0) {
      echo "<table>
              <tr>
                <th>Nama</th>
                <th>Tujuan</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Total (Rp)</th>
              </tr>";
      while ($row = $res->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nama']}</td>
                <td>{$row['tujuan']}</td>
                <td>{$row['tanggal']}</td>
                <td>{$row['jumlah']}</td>
                <td>".number_format($row['total'], 0, ',', '.')."</td>
              </tr>";
      }
      echo "</table>";
    } else {
      echo "<p class='no-data'>Belum ada data pemesanan.</p>";
    }
    $conn->close();
    ?>
  </div>
</body>
</html>
