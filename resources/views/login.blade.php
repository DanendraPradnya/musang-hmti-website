<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Pastikan Anda memiliki file CSS dengan nama "style.css" -->
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo" class="logo">
            <h2>Selamat Datang</h2>
            <h3>Masuk ke akun Anda</h3>
            <form class="login-form">
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button class="login-btn">Masuk</button>
                <a href="#">Lupa Password?</a>
            </form>
        </div>
    </div>
</body>
</html>