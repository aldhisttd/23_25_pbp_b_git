<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register Elegan</title>
  <style>
    /* ----------------- Body Style ----------------- */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    /* ----------------- Form Card ----------------- */
    .card {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px 35px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
      width: 340px;
      text-align: center;
      color: #333;
    }

    h2 {
      margin-bottom: 25px;
      color: #fff;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }

    label {
      display: block;
      text-align: left;
      margin: 10px 0 5px;
      font-weight: 500;
      color: #f2f2f2;
    }

    input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 14px;
      margin-bottom: 15px;
      box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.2);
    }

    input:focus {
      border: 2px solid #6dd5ed;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: linear-gradient(to right, #43cea2, #185a9d);
      color: white;
      font-weight: bold;
      letter-spacing: 1px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      transform: translateY(-2px);
      background: linear-gradient(to right, #3aa779, #144b82);
    }

    /* ----------------- Result Box ----------------- */
    .result {
      margin-top: 25px;
      background: rgba(255, 255, 255, 0.3);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 20px;
      width: 340px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
      text-align: left;
      color: #fff;
      animation: fadeIn 0.6s ease;
    }

    .result h3 {
      text-align: center;
      margin-bottom: 10px;
      color: #fff;
    }

    .result p {
      margin: 6px 0;
    }

    /* ----------------- Animation ----------------- */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div class="card">
    <h2>🌸 Form Register 🌸</h2>
    <form action="" method="post">
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama kamu..." required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Buat username..." required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email kamu..." required>

      <button type="submit" name="submit">Daftar Sekarang</button>
    </form>
  </div>

  <?php
  if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    echo "
      <div class='result'>
        <h3>🎉 Data Registrasi Berhasil!</h3>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Username:</strong> $username</p>
        <p><strong>Email:</strong> $email</p>
      </div>
      ";
  }
  ?>
</body>

</html>