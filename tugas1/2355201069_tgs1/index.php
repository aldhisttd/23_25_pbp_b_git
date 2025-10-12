<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Register</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-amber-400 to-amber-600 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-2xl rounded-2xl w-full max-w-md p-8">
    <h2 class="text-3xl font-bold text-center text-amber-600 mb-6">Form Register</h2>
    
    <form action="proses_register.php" method="POST" class="space-y-5">
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required 
               class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-amber-500 focus:outline-none" 
               placeholder="Masukkan nama lengkap kamu">
      </div>

      <!-- Username -->
      <div>
        <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input type="text" id="username" name="username" required 
               class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-amber-500 focus:outline-none" 
               placeholder="Masukkan username">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" required 
               class="w-full px-4 py-2 border rounded-xl focus:ring-2 focus:ring-amber-500 focus:outline-none" 
               placeholder="Masukkan email aktif kamu">
      </div>

      <!-- Tombol -->
      <button type="submit" 
              class="w-full py-3 bg-amber-600 hover:bg-amber-700 text-white font-semibold rounded-xl shadow-md transition duration-300">
        Daftar Sekarang
      </button>
    </form>

    <p class="text-center text-sm text-gray-500 mt-6">
      Sudah punya akun? <a href="#" class="text-amber-600 hover:underline">Login di sini</a>
    </p>
  </div>

</body>
</html>
