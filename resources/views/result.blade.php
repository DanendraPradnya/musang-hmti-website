<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Suara Real-Time</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <style>
        /* Custom Tailwind Config */
        :root {
            --cokelat-tua: #7E4C3C;
            --cokelat-muda: #ECE3D9;
            --putih: #FFFFFF;
            --hitam: #1C1C1C;
            --kuning-emas: #F5D697;
        }
    </style>
</head>

<body class="bg-[var(--cokelat-muda)] min-h-screen flex flex-col items-center">
    <!-- Background -->
    <div class="absolute inset-0 bg-[url('gambar/pola-floral.png')] bg-cover opacity-40 -z-10"></div>

    <!-- Header -->
    <header class="w-full flex items-center bg-[var(--cokelat-muda)] text-[var(--putih)] py-4 px-8 shadow-md">
        <!-- Logo Kiri -->
        <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang HMTI" class="h-12">

        <!-- Judul Tengah -->
        <h1 class="flex-1 flex flex-col items-center text-center">
            <span class="text-[var(--hitam)] font-bold">PENGHITUNGAN SUARA</span>
            <span class="text-[var(--hitam)] font-bold">REAL-TIME</span>
        </h1>

        <!-- Logo Kanan -->
        <img src="gambar/logo ti.png" alt="Logo TI" class="h-12">
    </header>

    <!-- Year Selection -->
    <div class="mt-6">
        <button id="dropdown-tahun" onclick="toggleDropdown()" class="relative px-4 py-2 bg-[var(--cokelat-tua)] text-[var(--putih)] rounded-full shadow-lg hover:bg-[#6D3F34] transition flex items-center gap-2">
            TAHUN PEMILIHAN 
            <span class="text-lg transform transition-transform" id="arrow">▼</span>
        </button>
        <div id="dropdown-menu" class="hidden absolute mt-2 bg-[var(--putih)] text-[var(--cokelat-tua)] shadow-lg rounded-lg overflow-hidden w-40">
            <a href="#tahun-2022" class="block px-4 py-2 hover:bg-[var(--kuning-emas)] hover:text-[var(--hitam)]">2022</a>
            <a href="#tahun-2023" class="block px-4 py-2 hover:bg-[var(--kuning-emas)] hover:text-[var(--hitam)]">2023</a>
            <a href="#tahun-2024" class="block px-4 py-2 hover:bg-[var(--kuning-emas)] hover:text-[var(--hitam)]">2024</a>
        </div>
    </div>

    <!-- Vote Container -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-8 px-4 w-full max-w-6xl">

        <!-- Card 2022 -->
        <div class="vote-card bg-[var(--putih)] rounded-lg shadow-lg p-6 border-2 border-[var(--cokelat-tua)]">
            <div class="card-header flex items-center justify-between">
                <span class="year-box bg-[var(--cokelat-tua)] text-[var(--putih)] px-3 py-1 rounded-full">Tahun 2022</span>
                <p class="total-votes text-[var(--cokelat-tua)] text-sm font-medium">311 / 476 Suara</p>
            </div>
            <button onclick="goToResult(2022)" class="btn-detail mt-4 w-full py-2 bg-[var(--kuning-emas)] text-[var(--hitam)] rounded-lg hover:bg-[#D4B172] transition">
                Lebih Lengkap
            </button>
        </div>

        <!-- Card 2023 -->
        <div class="vote-card bg-[var(--putih)] rounded-lg shadow-lg p-6 border-2 border-[var(--cokelat-tua)]">
            <div class="card-header flex items-center justify-between">
                <span class="year-box bg-[var(--cokelat-tua)] text-[var(--putih)] px-3 py-1 rounded-full">Tahun 2023</span>
                <p class="total-votes text-[var(--cokelat-tua)] text-sm font-medium">285 / 450 Suara</p>
            </div>
            <button onclick="goToResult(2023)" class="btn-detail mt-4 w-full py-2 bg-[var(--kuning-emas)] text-[var(--hitam)] rounded-lg hover:bg-[#D4B172] transition">
                Lebih Lengkap
            </button>
        </div>

        <!-- Card 2024 -->
        <div class="vote-card bg-[var(--putih)] rounded-lg shadow-lg p-6 border-2 border-[var(--cokelat-tua)]">
            <div class="card-header flex items-center justify-between">
                <span class="year-box bg-[var(--cokelat-tua)] text-[var(--putih)] px-3 py-1 rounded-full">Tahun 2024</span>
                <p class="total-votes text-[var(--cokelat-tua)] text-sm font-medium">Belum Ada Suara</p>
            </div>
            <button onclick="goToResult(2024)" class="btn-detail mt-4 w-full py-2 bg-[var(--kuning-emas)] text-[var(--hitam)] rounded-lg hover:bg-[#D4B172] transition">
                Lebih Lengkap
            </button>
        </div>

    </div>

    <script>
        // Fungsi untuk toggle dropdown
        function toggleDropdown() {
            const menu = document.getElementById('dropdown-menu');
            const arrow = document.getElementById('arrow');
            menu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }

        // Fungsi untuk mengarahkan ke halaman result2 dengan parameter tahun
        function goToResult(year) {
            window.location.href = `result2.html?year=${year}`;
        }
    </script>

</body>

</html>
