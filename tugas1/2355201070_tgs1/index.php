<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7e6e8; /* red velvet soft background */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: #fff6f7;
      border: 1px solid #e1b7b9;
      border-radius: 10px;
      padding: 25px;
      width: 300px;
      box-shadow: 0 4px 10px rgba(128, 0, 32, 0.15);
      text-align: center;
    }
    h2 {
      color: #7a1c24; /* burgundy */
      margin-bottom: 10px;
    }
    p.lead {
      color: #8a3b46;
      font-size: 14px;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-top: 10px;
      color: #661a1e;
      font-size: 14px;
      text-align: left;
    }
    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #d88b8e;
      border-radius: 6px;
      margin-top: 4px;
      background-color: #fff;
    }
    input:focus {
      border-color: #b93a4b;
      outline: none;
      box-shadow: 0 0 5px rgba(185, 58, 75, 0.4);
    }
    button {
      margin-top: 15px;
      width: 100%;
      padding: 10px;
      background-color: #b23a48; /* red velvet tone */
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
    }
    button:hover {
      background-color: #992e3d; /* darker burgundy */
    }
    .login-link {
      margin-top: 15px;
      font-size: 13px;
      color: #6a1f27;
    }
    .login-link a {
      color: #b23a48;
      text-decoration: none;
      font-weight: bold;
    }
    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Register</h2>
    <p class="lead">Buat akun baru dengan mengisi data di bawah ini.</p>
    <form>
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required>

      <button type="submit">Daftar</button>
    </form>
    <div class="login-link">
      Sudah punya akun? <a href="#">Masuk di sini</a>
    </div>
  </div>
</body>
</html>