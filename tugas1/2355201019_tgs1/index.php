<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "<div style='text-align:center; font-family:sans-serif; color:#333; margin-top:50px;'>
            <h2>Login Success!</h2>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Password:</strong> $password</p>
            <a href='" . $_SERVER['PHP_SELF'] . "' style='color:#ff6600;'>Back to Login</a>
          </div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
  *, *::before, *::after { box-sizing: border-box; }

  body {
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background: #fff95b;
    font-family:sans-serif;
  }

  .wrapper {
    width:350px;
    padding:30px 20px;
    border-radius:15px;
    background: rgba(255,255,255,0.85);
    border:1px solid rgba(0,0,0,0.1);
    text-align:center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
  }

  .wrapper:hover { transform: translateY(-5px); }

  h2 { color:#333; margin-bottom:25px; font-size:1.8rem; }

  input, button {
    width:100%;
    padding:12px 15px;
    margin:10px 0;
    border:none;
    border-radius:8px;
    outline:none;
    font-size:14px;
  }

  input {
    box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
    transition: box-shadow 0.2s ease, transform 0.2s ease;
  }

  input:focus {
    box-shadow: 0 0 8px rgba(255,102,0,0.5);
    transform: translateY(-1px);
  }

  .options {
    display:flex;
    justify-content:space-between;
    font-size:12px;
    margin:8px 0 20px 0;
  }

  .options label { display:flex; align-items:center; }
  .options input[type="checkbox"] { margin-right:6px; }

  button {
    background:#ff6600; /* tombol oranye */
    color:#fff;
    font-weight:bold;
    cursor:pointer;
    transition: background 0.3s ease, transform 0.2s ease;
  }

  button:hover {
    background:#e65c00; /* oranye lebih gelap saat hover */
    transform: translateY(-2px);
  }

  .register {
    margin-top:18px;
    font-size:13px;
    color:#333;
  }

  .register a { color:#ff6600; text-decoration:none; }
  .register a:hover { text-decoration:underline; }
</style>
</head>
<body>
  <div class="wrapper">
    <form action="" method="post">
      <h2>Login</h2>
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <div class="options">
        <label><input type="checkbox" name="remember"> Remember me</label>
        <a href="#">Forgot?</a>
      </div>
      <button type="submit">Log In</button>
      <p class="register">Don't have an account? <a href="#">Register</a></p>
    </form>
  </div>
</body>
</html>
