<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col items-center justify-start">
    <!-- Navbar -->
    <div class="bg-white w-full shadow-md flex justify-between items-center px-6 py-4">
        <h1 class="text-lg font-bold text-gray-800">Profil Pengguna</h1>
        
        <!-- Dropdown Trigger -->
        <div class="relative">
            <button id="dropdownToggle" class="flex items-center gap-2 bg-gray-200 px-4 py-2 rounded-full hover:bg-gray-300 transition">
                <img src="gambar/calon1.JPG" alt="Profile" class="w-10 h-10 rounded-full">
                <span>{{ Auth::user()->name }}</span>
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7 7 7-7" />
                </svg>
            </button>
            
            <!-- Dropdown Menu -->
            <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                <ul class="py-2">
                    <li>
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                    </li>
                    <hr class="my-1">
                    <li>
                        <form action="{{ route('signout') }}" method="POST">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">
                                Sign Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full mt-6">
        <h1 class="text-2xl font-bold mb-4">Halo, {{ Auth::user()->name }}!</h1>
        <p class="text-gray-700 mb-6">Ini adalah halaman profil Anda.</p>

        @if (Auth::check())
            <a href="{{ route('profile') }}" class="text-blue-500 hover:text-blue-700 font-medium underline">Profile</a>
            <form action="{{ route('signout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 transition">
                    Sign Out
                </button>
            </form>
        @else
            <div class="flex gap-4">
                <a href="{{ route('login.tampil') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition">Login</a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 transition">Register</a>
            </div>
        @endif
    </div>

    <!-- Script -->
    <script>
        const dropdownToggle = document.getElementById('dropdownToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownToggle.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        window.addEventListener('click', (e) => {
            if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
