<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapat Angkatan HMTI</title>
    <link rel="stylesheet" href="{{ asset('css/rangkaian.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .title h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .carousel {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 100%;
            transition: left 1s ease-in-out;
        }
        .carousel img.active {
            left: 0;
        }
        .carousel img.prev {
            left: -100%;
        }
        .content {
            margin-bottom: 40px;
            text-align: justify;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Rapat Angkatan -->
        <div class="title">
            <h1>RAPAT ANGKATAN</h1>
        </div>
        <div class="carousel" id="carousel1">
            <img src="gambar/rapatangkatan.JPG" alt="Foto Rapat Angkatan" class="active">
            <img src="gambar/rapat2.jpg" alt="Diskusi Mahasiswa">
            <img src="gambar/rapat3.jpg" alt="Sesi Tanya Jawab">
        </div>
        <div class="content">
            <p>Rapat Angkatan merupakan acara penting yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI)...</p>
        </div>

        <!-- Pra-Musang -->
        <div class="title">
            <h1>PRA-MUSANG</h1>
        </div>
        <div class="carousel" id="carousel2">
            <img src="gambar/pramusang.JPG" alt="Pra-Musang" class="active">
            <img src="gambar/pramusang2.jpg" alt="Rapat Angkatan">
            <img src="gambar/pramusang3.jpg" alt="Diskusi Terbuka">
        </div>
        <div class="content">
            <p>Pra-Musang adalah acara penting yang diadakan oleh Himpunan Mahasiswa Teknologi Informasi (HMTI)...</p>
        </div>

        <!-- Musang -->
        <div class="title">
            <h2>MUSANG</h2>
        </div>
        <div class="carousel" id="carousel3">
            <img src="gambar/musang.JPG" alt="Musang" class="active">
            <img src="gambar/musang2.jpg" alt="Peserta Diskusi">
            <img src="gambar/musang3.jpg" alt="Rapat Formal">
        </div>
        <div class="content">
            <p>Musang adalah acara puncak yang bertujuan untuk mengesahkan secara resmi seluruh peraturan yang telah dibahas...</p>
        </div>
    </div>

    <script>
        // Function to handle carousel sliding
        function initCarousel(carouselId) {
            const carousel = document.getElementById(carouselId);
            const images = carousel.querySelectorAll("img");
            let index = 0;

            setInterval(() => {
                images[index].classList.remove("active");
                index = (index + 1) % images.length;
                images[index].classList.add("active");
            }, 3000); // Change image every 3 seconds
        }

        // Initialize all carousels
        initCarousel("carousel1");
        initCarousel("carousel2");
        initCarousel("carousel3");
    </script>
</body>
</html>
