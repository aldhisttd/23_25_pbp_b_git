<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pasien Rumah Sakit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #a8edea, #fed6e3);
      font-family: 'Poppins', sans-serif;
    }
    .container {
      max-width: 800px;
      margin-top: 40px;
      background: #ffffffb5;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      backdrop-filter: blur(6px);
    }
    table {
      font-size: 13px;
      text-align: center;
      vertical-align: middle;
    }
    th {
      background-color: #4eb086 !important;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h3 class="text-center text-success mb-4">📋 Data Pasien Rumah Sakit</h3>

  <table class="table table-bordered table-hover table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Poli</th>
        <th>Penyakit</th>
        <th>Dokter</th>
        <th>Tgl Daftar</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      while ($row = $data->fetch_assoc()) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['nama_pasien'] ?></td>
          <td><?= $row['jenis_kelamin'] ?></td>
          <td><?= $row['poli_tujuan'] ?></td>
          <td><?= $row['penyakit'] ?></td>
          <td><?= $row['nama_dokter'] ?></td>
          <td><?= $row['tanggal_daftar'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <div class="text-center mt-3">
    <a href="index.php" class="btn btn-outline-primary btn-sm">Tambah Data Baru</a>
  </div>
</div>

</body>
</html>