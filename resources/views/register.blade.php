<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head> 
<body>
  <div class="container">
    <!-- Title section -->
    <div class="login-card">
        <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo" class="logo"> <!-- Logo -->
    </div>
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" name="name" placeholder="Masukkan Nama Lengkap" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Masukkan Email" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Masukkan Password" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Konfirmasi Password</span>
            <input type="password" name="password_confirmation" placeholder="Masukkan Ulang Password" required>
          </div>
        </div>
        
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
