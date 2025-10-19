<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Input Data Pasien Rumah Sakit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #a8edea, #fed6e3);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
    }
    .container {
      max-width: 550px;
      margin-top: 60px;
      background: #ffffffb5;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      backdrop-filter: blur(6px);
    }
    h3 {
      text-align: center;
      margin-bottom: 25px;
      color: #2e6f95;
      font-weight: 600;
    }
    .btn-success {
      background-color: #4eb086;
      border: none;
    }
    .btn-success:hover {
      background-color: #3d9a74;
    }
  </style>
</head>
<body>

<div class="container">
  <h3>🩺 Input Data Pasien Rumah Sakit</h3>
  <form action="proses.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nama Pasien</label>
      <input type="text" name="nama_pasien" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-select" required>
        <option value="">-- Pilih --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">No. HP</label>
      <input type="text" name="no_hp" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Poli Tujuan</label>
      <select name="poli_tujuan" class="form-select" required>
        <option value="">-- Pilih Poli --</option>
        <option value="Poli Umum">Poli Umum</option>
        <option value="Poli Gigi">Poli Gigi</option>
        <option value="Poli Anak">Poli Anak</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Penyakit</label>
      <input type="text" name="penyakit" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Nama Dokter</label>
      <input type="text" name="nama_dokter" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Daftar</label>
      <input type="date" name="tanggal_daftar" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Simpan Data</button>
  </form>

  <div class="text-center mt-3">
    <a href="data.php" class="btn btn-outline-primary btn-sm">Lihat Data Pasien</a>
  </div>
</div>

</body>
</html>
