<?php
// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = $_POST["nama"];
    $username = $_POST["username"];
    $email    = $_POST["email"];

    $hasil = "Halo <b>$nama</b>!<br>Username: $username<br>Email: $email";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card p-4 shadow-sm">
        <h4 class="mb-3 text-center text-primary">Form Registrasi</h4>

        <?php if (!empty($hasil)): ?>
          <div class="alert alert-success">
            <?= $hasil ?>
          </div>
        <?php endif; ?>

        <form method="POST">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
      </div>

    </div>
  </div>
</div>

</body>
</html>
