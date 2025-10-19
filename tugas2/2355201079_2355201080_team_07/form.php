<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data Kost</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a1c4fd, #c2e9fb);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 400px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      font-weight: 500;
      display: block;
      margin-top: 10px;
    }
    input, textarea, select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <form action="proses.php" method="POST">
    <h2>Input Data Kost</h2>

    <label for="nama_kost">Nama Kost:</label>
    <input type="text" name="nama_kost" required>

    <label for="jumlah_kamar">Jumlah Kamar:</label>
    <input type="number" name="jumlah_kamar" required>

    <label for="status">Status:</label>
    <select name="status" required>
      <option value="">-- Pilih Status --</option>
      <option value="Tersedia">Tersedia</option>
      <option value="Penuh">Penuh</option>
    </select>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" rows="3" required></textarea>

    <label for="no_hp">No HP:</label>
    <input type="text" name="no_hp" required>

    <button type="submit">Simpan Data</button>
  </form>

</body>
</html>
