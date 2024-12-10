<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Polling Kandidat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --brown-dark: #8B5E3C;
            --brown-light: #DCCAB3;
            --brown-hover: #6A452B;
            --accent-gold: #F2C85E;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-brown-light to-white min-h-screen font-sans">

    <!-- Container Utama -->
    <div class="max-w-6xl mx-auto py-16 px-6">
        <!-- Judul -->
        <h1 class="text-5xl font-extrabold text-center text-brown-dark mb-12">
            Polling Kandidat
        </h1>

        <!-- Grid Kandidat -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Kandidat 1 -->
            <div class="bg-white shadow-xl rounded-lg p-8 flex flex-col items-center transform hover:scale-105 hover:shadow-2xl transition duration-300">
                <img src="gambar/calon1.JPG" alt="Kandidat 1" class="w-40 h-100 object-cover rounded-full mb-6 border-4 border-brown-light">
                <h2 class="text-center text-xl font-bold text-brown-dark mb-4">I Gede Krisna Pradnya Putra</h2>
                <button class="vote-btn bg-gradient-to-r from-brown-dark to-brown-hover hover:from-brown-hover hover:to-brown-dark text-black font-semibold py-2 px-8 rounded-full shadow-lg" data-candidate="I Gede Krisna Pradnya Putra">Vote</button>
                <!-- Tombol Visi dan Misi -->
                <div class="flex space-x-4 mt-4">
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600" onclick="showModal('I Gede Krisna Pradnya Putra', 'Visi: Menjadikan HMTI sebagai wadah yang inklusif untuk semua anggota. Membuka akses kepada berbagai program yang bermanfaat bagi anggota dan masyarakat.')">Lihat Visi</button>
                    <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600" onclick="showModal('I Gede Krisna Pradnya Putra', 'Misi: 1. Meningkatkan kolaborasi antar anggota HMTI.<br>2. Mengadakan kegiatan yang meningkatkan keterampilan dan pengetahuan anggota.<br>3. Memperluas jaringan kerjasama dengan organisasi lain.')">Lihat Misi</button>
                </div>
            </div>

            <!-- Kandidat 2 -->
            <div class="bg-white shadow-xl rounded-lg p-8 flex flex-col items-center transform hover:scale-105 hover:shadow-2xl transition duration-300">
                <img src="gambar/calon2.JPG" alt="Kandidat 2" class="w-40 h-100 object-cover rounded-full mb-6 border-4 border-brown-light">
                <h2 class="text-center text-xl font-bold text-brown-dark mb-4">I Gusti Komang Damar Ari S.</h2>
                <button class="vote-btn bg-gradient-to-r from-brown-dark to-brown-hover hover:from-brown-hover hover:to-brown-dark text-black font-semibold py-2 px-8 rounded-full shadow-lg" data-candidate="I Gusti Komang Damar Ari S.">Vote</button>
                <!-- Tombol Visi dan Misi -->
                <div class="flex space-x-4 mt-4">
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600" onclick="showModal('I Gusti Komang Damar Ari S.', 'Visi: Membawa inovasi baru di HMTI yang dapat memberi dampak positif bagi anggota dan masyarakat sekitar. Meningkatkan kualitas SDM dengan program kerja yang terstruktur dan efektif.')">Lihat Visi</button>
                    <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600" onclick="showModal('I Gusti Komang Damar Ari S.', 'Misi: 1. Mengembangkan program kerja yang berbasis teknologi dan inovasi.<br>2. Meningkatkan kualitas pelatihan dan pengembangan diri bagi anggota.<br>3. Menjalin kerjasama dengan organisasi di luar kampus.')">Lihat Misi</button>
                </div>
            </div>

            <!-- Kandidat 3 -->
            <div class="bg-white shadow-xl rounded-lg p-8 flex flex-col items-center transform hover:scale-105 hover:shadow-2xl transition duration-300">
                <img src="gambar/calon3.JPG" alt="Kandidat 3" class="w-40 h-100 object-cover rounded-full mb-6 border-4 border-brown-light">
                <h2 class="text-center text-xl font-bold text-brown-dark mb-4">Nyoman Danendra Widy P.</h2>
                <button class="vote-btn bg-gradient-to-r from-brown-dark to-brown-hover hover:from-brown-hover hover:to-brown-dark text-black font-semibold py-2 px-8 rounded-full shadow-lg" data-candidate="Nyoman Danendra Widy P.">Vote</button>
                <!-- Tombol Visi dan Misi -->
                <div class="flex space-x-4 mt-4">
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600" onclick="showModal('Nyoman Danendra Widy P.', 'Visi: Meningkatkan semangat kepemimpinan di HMTI melalui pendidikan yang lebih baik dan kegiatan yang memberdayakan setiap anggota.')">Lihat Visi</button>
                    <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600" onclick="showModal('Nyoman Danendra Widy P.', 'Misi: 1. Meningkatkan kegiatan edukatif yang berguna bagi anggota.<br>2. Menjalin komunikasi yang baik antar anggota dan pengurus.<br>3. Mengadakan lebih banyak pelatihan dan seminar bagi anggota HMTI.')">Lihat Misi</button>
                </div>
            </div>

            <!-- Kandidat 4 -->
            <div class="bg-white shadow-xl rounded-lg p-8 flex flex-col items-center transform hover:scale-105 hover:shadow-2xl transition duration-300">
                <img src="gambar/calon4.JPG" alt="Kandidat 4" class="w-40 h-100 object-cover rounded-full mb-6 border-4 border-brown-light">
                <h2 class="text-center text-xl font-bold text-brown-dark mb-4">I Made Gede Riyandhi W.P.</h2>
                <button class="vote-btn bg-gradient-to-r from-brown-dark to-brown-hover hover:from-brown-hover hover:to-brown-dark text-black font-semibold py-2 px-8 rounded-full shadow-lg" data-candidate="I Made Gede Riyandhi W.P.">Vote</button>
                <!-- Tombol Visi dan Misi -->
                <div class="flex space-x-4 mt-4">
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600" onclick="showModal('I Made Gede Riyandhi W.P.', 'Visi: Menciptakan lingkungan akademik yang sehat dan produktif dengan fokus pada pembinaan karakter anggota.')">Lihat Visi</button>
                    <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600" onclick="showModal('I Made Gede Riyandhi W.P.', 'Misi: 1. Meningkatkan kualitas akademik dengan program beasiswa dan pendampingan.<br>2. Menguatkan jaringan alumni untuk keberlanjutan organisasi.<br>3. Membangun suasana yang mendukung pengembangan diri setiap anggota.')">Lihat Misi</button>
                </div>
            </div>
        </div>

        <!-- Modal Konfirmasi Vote -->
        <div id="vote-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
                <h2 id="modal-title" class="text-xl font-bold text-center mb-4"></h2>
                <p id="modal-message" class="text-gray-700 text-center mb-6"></p>
                <div class="text-center">
                    <button onclick="closeVoteModal()" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Tutup</button>
                </div>
            </div>
        </div>

        <!-- Modal Visi dan Misi -->
        <div id="visi-misi-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
                <h2 id="visi-misi-title" class="text-xl font-bold text-center mb-4"></h2>
                <p id="visi-misi-content" class="text-gray-700 text-center mb-6"></p>
                <div class="text-center">
                    <button onclick="closeVisiMisiModal()" class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil semua tombol vote
        const voteButtons = document.querySelectorAll('.vote-btn');

        // Tambahkan event listener untuk setiap tombol
        voteButtons.forEach(button => {
            button.addEventListener('click', () => {
                const candidate = button.getAttribute('data-candidate'); // Ambil nama kandidat

                // Kirim data ke server
                fetch('/vote', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({ candidate_name: candidate }), // Data kandidat
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Gagal menyimpan vote.');
                })
                .then(data => {
                    showVoteModal('Vote Berhasil', data.message); // Tampilkan pesan sukses
                })
                .catch(error => {
                    console.error('Error:', error);
                    showVoteModal('Error', 'Gagal mengirim vote, coba lagi.');
                });
            });
        });

        // Fungsi untuk menampilkan modal Visi dan Misi
        function showModal(title, message) {
            const modal = document.getElementById('visi-misi-modal');
            document.getElementById('visi-misi-title').innerText = title;
            document.getElementById('visi-misi-content').innerHTML = message;
            modal.classList.remove('hidden'); // Tampilkan modal
        }

        // Fungsi untuk menutup modal Visi dan Misi tanpa redirect
        function closeVisiMisiModal() {
            const modal = document.getElementById('visi-misi-modal');
            modal.classList.add('hidden'); // Sembunyikan modal
        }

        // Fungsi untuk menampilkan modal konfirmasi vote
        function showVoteModal(title, message) {
            const modal = document.getElementById('vote-modal');
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-message').innerHTML = message;
            modal.classList.remove('hidden'); // Tampilkan modal
        }

        // Fungsi untuk menutup modal konfirmasi vote dan redirect ke halaman awal
        function closeVoteModal() {
            const modal = document.getElementById('vote-modal');
            modal.classList.add('hidden'); // Sembunyikan modal
            alert("Anda sudah memilih calon ketua himpunan!");
            window.location.href = '/musang'; // Redirect ke halaman awal (home)
        }
    </script>

</body>

</html>
