<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ff0000ff, #fd3e3eff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .container {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #ff0000ff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }
    button:hover {
      background-color: #e60000;
    }
    .hasil {
      margin-top: 20px;
      background: #f7f7f7;
      padding: 10px;
      border-radius: 8px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Register</h2>

    <!-- Form Registrasi -->
    <form action="" method="post">
      <input type="text" name="nama" placeholder="Masukkan Nama" required>
      <input type="text" name="username" placeholder="Masukkan Username" required>
      <input type="email" name="email" placeholder="Masukkan Email" required>
      <button type="submit" name="submit">Daftar</button>
    </form>

    <!-- PHP Proses Form -->
    <?php
    if (isset($_POST['submit'])) {
      $nama = htmlspecialchars($_POST['nama']);
      $username = htmlspecialchars($_POST['username']);
      $email = htmlspecialchars($_POST['email']);

      echo "<div class='hasil'>";
      echo "<strong>Data Pendaftaran:</strong><br>";
      echo "Nama: $nama <br>";
      echo "Username: $username <br>";
      echo "Email: $email <br>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
