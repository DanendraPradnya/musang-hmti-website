<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Calon Ketua HMTI 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Menambahkan jQuery -->
    <link href="{{ asset('css/pendaftaran.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Pastikan CSRF Token ada -->
</head>
<body style="background-image: url('/css/Pakem Bongkaran.png')">

    <!-- Container Utama -->
    <div class="max-w-4xl mx-auto py-10 px-6 shadow-md rounded-lg mt-5 bg-white" >
        <h1 class="text-3xl font-bold text-center text-brown-800 mb-8">FORM PENDAFTARAN KANDIDAT KETUA</h1>

        <!-- Form Container -->
        <form id="pendaftaranForm" action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- Input Email -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-brown-200" required>
            </div>

            <!-- Input Nama -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" name="nama" placeholder="Nama" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-brown-200" required>
            </div>

            <!-- Input No. Whatsapp/id line -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">No. WhatsApp/ID line</label>
                <input type="text" name="kontak" placeholder="No. WhatsApp/ID Line" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-brown-200" required>
            </div>

            <!-- Upload Foto Profil -->
            <div>
                <label class="block text-gray-700 font-medium mb-2">Foto Profil</label>
                <input type="file" name="profile_photo" accept="image/*" class="w-full cursor-pointer text-sm text-gray-600" required>
            </div>

            <!-- Upload Dokumen -->
            <div class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Scan KRM, Sertifikat Seminar Teknik, Transkrip Nilai Sementara, Sertif PKKMB Universitas, Sertifikat Student Day Fakultas</label>
                    <input type="file" name="krm_dokumen" accept="application/pdf" class="w-full cursor-pointer text-sm text-gray-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Sertifikat Kepanitiaan</label>
                    <input type="file" name="kepanitiaan_dokumen" accept="application/pdf" class="w-full cursor-pointer text-sm text-gray-600" required>
                </div>
            </div>

            <button type="submit" class="w-full bg-yellow-700 text-white py-2 rounded-md">Daftar</button>
        </form>
    </div>

    <!-- Popup -->
    <div id="successPopup" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Pendaftaran Berhasil!</h2>
            <p class="text-gray-700 mb-6">Terima kasih sudah mendaftar. Kami akan menghubungi Anda segera.</p>
            <button id="closePopup" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                Tutup
            </button>
        </div>
    </div>

    <!-- Script Preview Gambar dan Popup -->
    <script>
        const form = document.getElementById("pendaftaranForm");
        const popup = document.getElementById("successPopup");
        const closePopup = document.getElementById("closePopup");

        // Menangani pengiriman formulir
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir default

            // Menggunakan Ajax untuk mengirim data ke server
            const formData = new FormData(form);

            $.ajax({
                url: "{{ route('pendaftaran.store') }}",  // URL untuk route pendaftaran
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Menambahkan token CSRF
                },
                success: function(response) {
                    console.log(response); // Untuk melihat response di console
                    // Menampilkan popup setelah pendaftaran berhasil
                    popup.classList.remove('hidden');
                    popup.classList.add('flex');
                },
                error: function(xhr, status, error) {
                    console.log("Terjadi kesalahan:", error);
                }
            });
        });

        // Menutup popup setelah tombol tutup ditekan dan redirect ke halaman musang
        closePopup.addEventListener("click", function() {
            popup.classList.add("hidden");
            popup.classList.remove("flex");

            // Redirect ke halaman musang setelah tombol tutup ditekan
            window.location.href = "{{ route('musang') }}";  // Mengarah ke route 'musang.index'
        });
    </script>
</body>
</html>
