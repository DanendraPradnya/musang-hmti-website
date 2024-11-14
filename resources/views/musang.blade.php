<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - MUSANG HMTI 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rekam.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span><img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang" class="lm"></span>
            <ul class="nav-links navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#rekamjejak">Rekam Jejak</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-content">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactperson">Contact Person</a></li>
                <li class="nav-item"><button class="login-btn" id="loginBtn" onclick="redirectToLogin()">Login</button></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Beranda Section -->
        <section class="landing" id="beranda">
            <div class="content">
                <h1>APA ITU MUSANG HMTI 2024?</h1>
                <p>
                    Musang HMTI atau Musyawarah Anggota Himpunan Mahasiswa Teknologi adalah kegiatan musyawarah yang rutin
                    dilaksanakan setiap akhir tahun untuk evaluasi fungsionaris HMTI sebelumnya dan pemilihan ketua HMTI.
                </p>
            </div>
            <div class="slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gambar/musang.JPG" class="d-inline-block w-100 rounded" alt="Musang Event">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/pemira.JPG" class="d-inline-block w-100 rounded" alt="Pemira Event">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/pramusang.JPG" class="d-inline-block w-100 rounded" alt="Pramusang Event">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Rangkaian Kegiatan Section -->
        <section class="rangkaian-kegiatan" id="about-content">
            <div class="title"><h1>RANGKAIAN KEGIATAN</h1></div>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <!-- Card Example -->
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="gambar/rapatangkatan.JPG" alt="Rapat Angkatan" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="kegiatan">RAPAT ANGKATAN</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <a href="/rangkaian"><button class="btn btn-info btn-more">Lebih Lengkap</button></a>   
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="gambar/pramusang.JPG" alt="Rapat Angkatan" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="kegiatan">PRA-MUSANG</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <button class="btn btn-info btn-more">Lebih Lengkap</button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="gambar/musang.JPG" alt="Rapat Angkatan" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="kegiatan">MUSANG</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <button class="btn btn-info btn-more">Lebih Lengkap</button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="gambar/debat.JPG" alt="Rapat Angkatan" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="kegiatan">DEBAT KANDIDAT</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <button class="btn btn-info btn-more">Lebih Lengkap</button>
                                </div>
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <img src="gambar/pemira.JPG" alt="Rapat Angkatan" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="kegiatan">PEMIRA</h2>
                                    <p class="deskripsi">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                    <button class="btn btn-info btn-more">Lebih Lengkap</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Tentang Section -->
        <section class="about-content">
            <div class="about-logo">
                <img src="/gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang" class="logo-img">
            </div>
            <div class="about-text">
                <h2>TENTANG MUSANG</h2>
                <hr class="line">
                <p><strong>Musyawarah Anggota</strong> atau "MUSANG" adalah kegiatan musyawarah tahunan untuk evaluasi HMTI dan pemilihan ketua baru.</p>
            </div>
        </section>

        <!-- Rekam Jejak Section -->
        <section id="rekamjejak" class="rekam-jejak">
            <h1>REKAM JEJAK KANDIDAT</h1>
            <div class="rekam-jejak-container">
                <!-- Candidate Card Example -->
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat">Krisna</h1>
                    <img src="gambar/calon1.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo1" class="more-info" style="display:none;">
                        <p>Ketua Panitia Musang HMTI 2024</p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo1')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat"><strong>KING YANDHI</strong></h1>
                    <img src="gambar/calon4.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo2" class="more-info" style="display:none;">
                        <p><Strong>KORLAP TEKNOLOGI INFORMASI 2024</Strong></p>
                        <p><Strong>PENAKLUK TEKNOLOGI INFOMRASI</Strong></p>
                        <p><Strong>KORDINATOR KEAMANAN DAN PERLENGKAPAN MUSANG HMTI 2024</Strong></p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo2')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat">Danendra</h1>
                    <img src="gambar/calon3.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo3" class="more-info" style="display:none;">
                        <p>Anggota Sie Pubdok ITCC 2023</p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo3')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Person Section -->
        <section id="contactperson" class="contact-person">
            <h1>CONTACT <span class="highlight">PERSON</span></h1>
            <p class="description">Jika Anda memiliki pertanyaan, hubungi narahubung di bawah ini.</p>
            <div class="contact-cards">
                <div class="contact-card">
                    <h3>Danendra</h3>
                    <p>WA: 0813348xxx</p>
                    <p>LINE: Danendra</p>
                </div>
                <div class="contact-card">
                    <h3>Damar</h3>
                    <p>WA: 0813348xxx</p>
                    <p>LINE: riyandhi</p>
                </div>
                <div class="contact-card">
                    <h3>Riyandhi</h3>
                    <p>WA: 0813348xxx</p>
                    <p>LINE: Riyandhi</p>
                </div>
            </div>
            <div class="illustration">
                <img src="/gambar/contact person.png" alt="Customer Service Illustration">
            </div>
        </section>
    </main>

    <button class="btn-home" onclick="document.getElementById('beranda').scrollIntoView({ behavior: 'smooth'})">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
            <line x1="12" y1="19" x2="12" y2="5" />
            <polyline points="5 12 12 5 19 12" />
        </svg>
    </button>

    <!-- JavaScript Section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".slide-content", {
            slidesPerView: 3,
            spaceBetween: 35,
            loop: true,
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
        });

        function toggleMoreInfo(id) {
            var moreInfo = document.getElementById(id);
            moreInfo.style.display = moreInfo.style.display === "none" ? "block" : "none";
        }
    </script>

<script>
    function redirectToLogin() {
        window.location.href = '/login';
    }

    function toggleMoreInfo(id) {
        var element = document.getElementById(id);
        if (element.style.display === "none" || element.style.display === "") {
            element.style.display = "block";  // Show more info
        } else {
            element.style.display = "none";   // Hide more info
        }
    }
</script>
</body>
</html>