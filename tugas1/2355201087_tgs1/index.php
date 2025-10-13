<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register | Tugas 1</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    .fade-in-up {
      animation: fadeInUp 0.8s ease forwards;
    }
    .glow {
      box-shadow: 0 0 15px rgba(255,255,255,0.3);
    }
  </style>
</head>
<body class="bg-gradient-to-br from-indigo-700 via-purple-700 to-pink-600 min-h-screen flex items-center justify-center font-sans text-white">

  <div class="w-full max-w-md bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl p-8 shadow-2xl fade-in-up">
    <h2 class="text-4xl font-extrabold text-center mb-6 tracking-wide drop-shadow-lg">Register Akun</h2>
    <p class="text-center text-sm text-gray-200 mb-6">Silakan isi data di bawah ini untuk mendaftar</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST["nama"]);
      $username = htmlspecialchars($_POST["username"]);
      $email = htmlspecialchars($_POST["email"]);

      echo "
      <div class='bg-green-500/20 border border-green-300 text-green-100 rounded-lg p-4 mb-6 fade-in-up'>
        <h3 class='text-lg font-semibold mb-1'>✅ Registrasi Berhasil!</h3>
        <p><strong>Nama:</strong> $nama</p>
        <p><strong>Username:</strong> $username</p>
        <p><strong>Email:</strong> $email</p>
      </div>";
    }
    ?>

    <form method="POST" action="" class="space-y-5 fade-in-up">
      <div>
        <label class="block mb-2 text-sm font-semibold text-gray-100">Nama Lengkap</label>
        <input type="text" name="nama" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:border-pink-400 focus:ring-2 focus:ring-pink-400 focus:bg-white/30 placeholder-gray-200 text-white transition duration-300"
          placeholder="Masukkan nama lengkap">
      </div>

      <div>
        <label class="block mb-2 text-sm font-semibold text-gray-100">Username</label>
        <input type="text" name="username" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:border-indigo-400 focus:ring-2 focus:ring-indigo-400 focus:bg-white/30 placeholder-gray-200 text-white transition duration-300"
          placeholder="Masukkan username">
      </div>

      <div>
        <label class="block mb-2 text-sm font-semibold text-gray-100">Email</label>
        <input type="email" name="email" required
          class="w-full px-4 py-3 rounded-lg bg-white/20 border border-white/30 focus:border-green-400 focus:ring-2 focus:ring-green-400 focus:bg-white/30 placeholder-gray-200 text-white transition duration-300"
          placeholder="Masukkan email">
      </div>

      <button type="submit" id="submitBtn"
        class="relative w-full py-3 rounded-lg bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-600 font-semibold text-white hover:scale-[1.02] active:scale-[0.98] transition-transform duration-300 shadow-lg hover:shadow-pink-500/40 glow">
        <span id="btnText">Daftar Sekarang 🚀</span>
        <span id="btnLoader" class="hidden absolute inset-0 flex items-center justify-center">
          <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor"
              d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
          </svg>
        </span>
      </button>
    </form>

    <p class="text-center text-sm text-gray-300 mt-6">Sudah punya akun? <a href="#" class="text-yellow-300 hover:underline">Login di sini</a></p>
  </div>

  <script>
    const btn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const btnLoader = document.getElementById("btnLoader");

    btn.addEventListener("click", () => {
      btnText.classList.add("hidden");
      btnLoader.classList.remove("hidden");
      setTimeout(() => {
        btnText.classList.remove("hidden");
        btnLoader.classList.add("hidden");
      }, 2000);
    });
  </script>

</body>
</html>
