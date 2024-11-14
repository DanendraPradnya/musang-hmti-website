<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Responsive Registration Form | CodingLab </title>
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head> 
<body>
  
  <div class="container">
    <!-- Title section -->
    <div class="login-card">
        <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo" class="logo"> <!-- Logo di sini -->
            <!-- Form continues here -->
          </div>
    <div class="title">Registration</div>
    <div class="content">
              
      <!-- Registration form -->
      <form action="#">
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">NIM</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Whatsapp</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">ID Line</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="" required>
          </div>
          <!-- Input for Confirm Password -->
          <div class="input-box">
            <span class="details">Konfirmasi Password</span>
            <input type="text" placeholder="" required>
          </div>
        </div>
        <div class="gender-details">
          <!-- Radio buttons for gender selection -->
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <!-- Label for Male -->
            <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Laki - Laki</span>
            </label>
            <!-- Label for Female -->
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Perempuan</span>
            </label>
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