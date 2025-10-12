<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #d7f9f3, #d0e8ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 320px;
      text-align: center;
    }

    h2 {
      color: #3a7bd5;
      margin-bottom: 20px;
    }

    label {
      display: block;
      text-align: left;
      font-weight: 600;
      color: #333;
      margin-top: 10px;
      margin-bottom: 5px;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #cce7ff;
      border-radius: 8px;
      font-size: 14px;
      transition: 0.2s;
      outline: none;
    }

    input:focus {
      border-color: #7bd5c9;
      box-shadow: 0 0 5px rgba(123, 213, 201, 0.5);
    }

    button {
      width: 100%;
      background-color: #7bd5c9;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      margin-top: 20px;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #3a7bd5;
    }

    p {
      font-size: 13px;
      color: #555;
      margin-top: 15px;
    }

    .footer {
      font-size: 12px;
      color: #777;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Register</h2>
    <form>
      <label for="nama">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

      <button type="submit">Daftar</button>
      <p class="footer">Sudah punya akun? <a href="#" style="color:#3a7bd5;text-decoration:none;">Masuk di sini</a></p>
    </form>
  </div>
</body>
</html>
