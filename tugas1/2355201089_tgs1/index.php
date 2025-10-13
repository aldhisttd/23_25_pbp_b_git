<?php
// Jika form dikirim (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);

    // Simpan data ke file (bisa diganti ke database nanti)
    $data = "Nama: $nama | Username: $username | Email: $email\n";
    file_put_contents("data.txt", $data, FILE_APPEND);

    $pesan = "Data berhasil disimpan!";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #444;
    }
    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: 0.3s;
    }
    input:focus {
      border-color: #a00000ff;
      box-shadow: 0 0 5px #a00000ff;
      outline: none;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #2575fc;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }
    button:hover {
      background-color: #1a5ed8;
    }
    .pesan {
      text-align: center;
      color: green;
      font-weight: bold;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Register</h2>
    <?php if (!empty($pesan)): ?>
      <p class="pesan"><?= $pesan; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required>

      <button type="submit">Daftar</button>
    </form>
  </div>
</body>
</html>
