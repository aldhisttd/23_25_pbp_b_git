<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form register</title>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 28rem; border-radius: 20px;">
        <h3 class="text-center mb-4 text-primary">From register</h3>
        <form>
            <div class="mb-3">
                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label" fw-semibold>username</label>
                <input type="text" class="form-control" id="username" placeholder="masukkan username" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label" fw-semibold>Email</label>
                <input type="text" class="form-control" id="email" placeholder="Masukkan email" required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Daftar</button>
        </form>
    </div>
    
</body>
</html>