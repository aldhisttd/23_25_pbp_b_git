<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Form Input Data</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      user-select: none;
    }
    .bg-img{
      background: url('bg.jpg');
      height: 100vh;
      background-size: cover;
      background-position: center;
    }
    .bg-img:after{
      position: absolute;
      content: '';
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(0,0,0,0.7);
    }
    .content{
      position: absolute;
      top: 50%;
      left: 50%;
      z-index: 999;
      text-align: center;
      padding: 60px 32px;
      width: 370px;
      transform: translate(-50%,-50%);
      background: rgba(255,255,255,0.04);
      box-shadow: -1px 4px 28px 0px rgba(0,0,0,0.75);
    }
    .content header{
      color: white;
      font-size: 30px;
      font-weight: 600;
      margin: 0 0 35px 0;
      font-family: 'Montserrat',sans-serif;
    }
    .field{
      position: relative;
      height: 45px;
      width: 100%;
      display: flex;
      background: rgba(255,255,255,0.94);
      margin-bottom: 16px;
    }
    .field span{
      color: #222;
      width: 40px;
      line-height: 45px;
    }
    .field input{
      height: 100%;
      width: 100%;
      background: transparent;
      border: none;
      outline: none;
      color: #222;
      font-size: 16px;
      font-family: 'Poppins',sans-serif;
    }
    .field input[type="submit"]{
      background: #3498db;
      border: 1px solid #2691d9;
      color: white;
      font-size: 18px;
      letter-spacing: 1px;
      font-weight: 600;
      cursor: pointer;
      font-family: 'Montserrat',sans-serif;
    }
    .field input[type="submit"]:hover{
      background: #2691d9;
    }
  </style>
</head>
<body>

  <div class="bg-img">
    <div class="content">
      <header>Form Input Data</header>

      <!-- PHP PROSES -->
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $nama = htmlspecialchars($_POST['nama']);
          $username = htmlspecialchars($_POST['username']);
          $email = htmlspecialchars($_POST['email']);
          
          echo "<div style='color:white; margin-bottom:15px; font-family:Poppins;'>
                  <b>Data berhasil dikirim!</b><br>
                  Nama: $nama <br>
                  Username: $username <br>
                  Email: $email
                </div>";
      }
      ?>

      <!-- FORM INPUT -->
      <form action="" method="POST">
        <div class="field">
          <span class="fa fa-user"></span>
          <input type="text" name="nama" required placeholder="Nama Lengkap">
        </div>
        <div class="field">
          <span class="fa fa-id-badge"></span>
          <input type="text" name="username" required placeholder="Username">
        </div>
        <div class="field">
          <span class="fa fa-envelope"></span>
          <input type="email" name="email" required placeholder="Email">
        </div>
        <div class="field">
          <input type="submit" value="SUBMIT">
        </div>
      </form>

    </div>
  </div>

</body>
</html>
