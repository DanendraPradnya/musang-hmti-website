<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Pastikan Anda memiliki file CSS dengan nama "login.css" -->
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <img src="{{ asset('gambar/LOGO MUSANG 2024 rz.png') }}" alt="Logo" class="logo">
            <h2>Selamat Datang</h2>
            <h3>Masuk ke akun Anda</h3>
            
            <!-- Login Form -->
            <form class="login-form" method="POST" action="{{ route('login.submit') }}">
                    @csrf
                    <!-- Input Email -->
                    <input type="email" name="email" placeholder="Email" required>
                    
                    <!-- Input Password -->
                    <input type="password" name="password" placeholder="Password" required>
                    
                    <!-- Tombol Login -->
                    <button type="submit" class="login-btn">Masuk</button>
                    <a href="register">Register</a>
                    <a href="#">Lupa Password?</a>
                </form>
                @if(session('gagal'))
                <p class="text danger">{{session('gagal')}}</p>
                @endif
        </div>
    </div>
</body>
</html>