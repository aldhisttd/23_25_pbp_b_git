<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pemesanan Tiket Bus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4 shadow-lg" style="width: 30rem;">
    <h3 class="text-center text-primary mb-3">Form Pemesanan Tiket Bus</h3>
    <form action="proses.php" method="POST">
      <div class="mb-3">
        <label class="form-label fw-semibold">Nama Pemesan</label>
        <input type="text" name="nama" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Tujuan</label>
        <select name="tujuan" class="form-select" required>
          <option value="">-- Pilih Tujuan --</option>
          <option value="Jakarta">Jakarta</option>
          <option value="Bandung">Bandung</option>
          <option value="Surabaya">Surabaya</option>
          <option value="Medan">Medan</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Tanggal Keberangkatan</label>
        <input type="date" name="tanggal" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Jumlah Tiket</label>
        <input type="number" name="jumlah" class="form-control" min="1" required>
      </div>

      <div class="mb-3">
        <label class="form-label fw-semibold">Harga per Tiket</label>
        <input type="number" name="harga" class="form-control" min="0" required>
      </div>

      <button type="submit" class="btn btn-success w-100 mt-2">Pesan Tiket</button>
    </form>
  </div>
</body>
</html>
