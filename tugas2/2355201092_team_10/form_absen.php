<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Absen Kepster Barbershop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="card shadow-lg">
      <div class="card-header bg-dark text-white text-center">
        <h3 class="mb-0">💈 Form Absen Kepster Barbershop</h3>
      </div>

      <div class="card-body">
        <form method="POST" action="proses_absen.php">
          <div class="mb-3">
            <label class="form-label">Nama Kepster</label>
            <input type="text" name="nama_kepster" class="form-control" placeholder="Masukkan nama kepster" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jam Masuk</label>
            <input type="time" name="jam_masuk" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Jam Pulang</label>
            <input type="time" name="jam_pulang" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <select name="keterangan" class="form-select" required>
              <option value="">-- Pilih Keterangan --</option>
              <option value="Hadir">Hadir</option>
              <option value="Izin">Izin</option>
              <option value="Sakit">Sakit</option>
              <option value="Alpha">Alpha</option>
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <a href="data_absen.php" class="btn btn-secondary">Lihat Data</a>
            <button type="submit" class="btn btn-primary">Simpan Absen</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
