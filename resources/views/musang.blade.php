<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - MUSANG HMTI 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rekam.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cp.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/votingbtn.css') }}"> -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <span><a href="/">
                <img src="gambar/LOGO MUSANG 2024 rz.png" alt="Logo Musang" class="lm">
                </a></span>
            <ul class="nav-links navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#rekamjejak">Rekam Jejak</a></li>
                <li class="nav-item"><a class="nav-link" href="#about-content">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#contactperson">Contact Person</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('result2') }}">Hasil Pemira</a></li>        
                <!-- Dropdown Menu -->
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <!-- Dropdown Button -->
                        <a href="#" 
                        id="dropdownToggle" 
                        class="nav-link dropdown-toggle d-flex align-items-center gap-2" 
                        role="button" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false">
                            <img src="gambar/calon1.JPG" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                            <span>{{ Auth::user()->name }}</span>
                        </a>

                        <!-- Dropdown Menu -->
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <a href="{{ route('profile') }}" class="dropdown-item">Profile</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('signout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <!-- Login Button for non-authenticated users -->
                    <li class="nav-item">
                        <button class="login-btn" id="loginBtn" onclick="redirectToLogin()">Login</button>
                    </li>
                @endif

            </ul>
        </nav>
    </header>

    <main>
        <!-- Landing Section Start -->
        <section class="landing" id="beranda">
        <div class="content justify-center">
            <h1>APA ITU MUSANG HMTI 2024?</h1>
            <p>
                Musang HMTI atau Musyawarah Anggota Himpunan Mahasiswa Teknologi adalah kegiatan musyawarah yang rutin
                dilaksanakan setiap akhir tahun untuk evaluasi fungsionaris HMTI sebelumnya dan pemilihan ketua HMTI.
            </p>
            <!-- Tombol Pendaftaran yang mengarah langsung ke halaman pendaftaran -->
            <div class="flex items-center gap-3 justify-start">
        <a href="{{ route('pendaftaran.index') }}" class="btn bg-neutral-400 text-white rounded-md text-center flex hover:bg-neutral-500">
        Pendaftaran Calon Ketua HMTI 2025
        </a>
        <a href="{{ route('vote') }}" class="btn bg-yellow-700 text-white rounded-md text-center flex px-11 hover:bg-yellow-600 ">
            Voting Calon Ketua HMTI 2025
        </a>
    </div>

            </div>
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
        <!-- Landing Section End -->


        <!-- Rangkaian Kegiatan Section Start -->
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
        <!-- Rangkaian Kegiatan Section End -->


        <!-- About Section Start -->
        <section id="about" class="pt-20 pb-24">
            <div class="container">
                <div class="flex flex-row">
                    <div class="w-full self-start">
                        <div class="mt-10">
                            <img class="w-75 h-fit mx-10" src="gambar/LOGO MUSANG 2024 rz.png" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="w-full px-4 mb-10">
                            <h4 class="font-bold uppercase text-Primary text-5xl mb-3 max-w-5xl">Tentang Musang HMTI</h4>
                            <p class="font-semibold text-lg text-slate-950">Musang HMTI <span class="font-normal">merupakan sebuah kegiatan tahunan yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi. 
                                Kegiatan ini bertujuan untuk melakukan evaluasi terkait dengan kinerja Himpunan Mahasiswa Teknologi Informasi 
                                dan melakukan pemilihan ketua Himpunan Mahasiswa Teknologi Informasi untuk tahun selanjutnya.</span></p>
                        </div>
                        <div class="w-full px-4 mb-2">
                            <h3 class="font-semibold text-Primary text-2xl max-w-5xl mb-1">Informasi Lebih Lanjut</h3>
                            <p>Untuk informasi yang lebih lanjut, kunjungi media sosial berikut!</p>
                        </div>
                        <div class="flex items-center mx-4">
                            {{-- Youtube --}}
                            <a href="https://www.youtube.com/@hmtiuniversitasudayana2028" target="_blank" class="w-12 h-12 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-Primary hover:bg-Primary hover:text-white transition ease-in-out delay-50" >
                                <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                                    <title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                            {{-- Instagram --}}
                            <a href="https://www.instagram.com/hmtiudayana/" target="_blank" class="w-12 h-12 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-Primary hover:bg-Primary hover:text-white transition ease-in-out delay-50" >
                                <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                                    <title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--About Section End -->

        <!-- Rekam Jejak Section Start -->
        <section id="rekamjejak" class="rekam-jejak">
            <h1 class="title-rekam-jejak font-bold text-4xl text-Primary mb-3">REKAM JEJAK KANDIDAT</h1>
            <div class="rekam-jejak-container">
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat text-xl font-semibold">Krisna</h1>
                    <img src="gambar/calon1.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Pengalaman Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo1" class="more-info" style="display:none;">
                        <p class="text-justify text-base mb-3">Ketua Panitia Musang HMTI 2024, Koordinator Sie Keamanan dan Perlengkapan IT-ESEGA 2024</p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo1')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat text-xl font-semibold">Riyandhi</h1>
                    <img src="gambar/calon4.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Pengalaman Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo2" class="more-info" style="display:none;">
                    <p class="text-justify text-base mb-3">Koordinator Lapangan Teknologi Informasi, Koordinator Sie Keamanan dan Perlengkapan MUSANG HMTI 2024 </p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo2')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat text-xl font-semibold">Damar</h1>
                    <img src="gambar/calon2.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Pengalaman Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo3" class="more-info" style="display:none;">
                        <p class="text-justify text-base mb-3">Koordinator Sie Keamanan dan Perlengkapan BUILD IT 2024, Wakil Ketua MUSANG HMTI 2024 </p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo3')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
                <div class="card-rekam-jejak">
                    <h1 class="class-kandidat text-xl font-semibold">Danendra</h1>
                    <img src="gambar/calon3.JPG" alt="Foto Calon 1" class="candidate-img">
                    <p><strong>Pengalaman Organisasi:</strong> Anggota Fungsionaris HMTI 2024</p>
                    <div id="moreInfo4" class="more-info" style="display:none;">
                        <p class="text-justify text-base mb-3">Koordinator Sie Publikasi dan Dokumentasi BUILD IT 2024, Anggota Sie Publikasi dan Dokumentasi ITCC 2023</p>
                    </div>
                    <p><strong>Prestasi:</strong> Finalis Lomba ITCC HMTI 2023</p>
                    <div class="button-div">
                        <button onclick="toggleMoreInfo('moreInfo4')" class="btn btn-secondary more-info-btn">More Info</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Rekam Jejak Section End -->

        <!-- Contact Person Section Start -->
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
        <!-- Contact Person Section End -->
        <footer class="bg-Primary">
    <div class="container">
        <div class="flex flex-row ">
        <div class="w-full px-4 mb-3 text-slate-300 font-medium md:w-1/3">
            <h2 class="font-bold text-3xl md:text-4xl text-white mb-4 mt-4">MUSANG HMTI 2024</h2>
            <h3 class="font-semibold text-xl text-white mb-2">Hubungi Kami</h3>
            <p>musanghmti@gmail.com</p>
            <p>Jl. Raya Kampus Udayana, Jimbaran</p>
            <p >Badung, Bali</p>
        </div>
        <div class="w-full px-4 mb-8 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-2 mt-4">Quick Links</h3>
            <ul class="text-slate-300 space-y-3 mb-3">
            <li>
                <a href="#beranda" aria-label="Menu Beranda" class="inline-block text-base hover:text-white transition-colors duration-200">Beranda</a>
            </li>
            <li>
                <a href="#rekamjejak" aria-label="Menu Rekam Jejak" class="inline-block text-base hover:text-white transition-colors duration-200">Rekam Jejak</a>
            </li>
            <li>
                <a href="#about-content" aria-label="Menu Tentang" class="inline-block text-base hover:text-white transition-colors duration-200">Tentang</a>
            </li>
            <li>
                <a href="#contactperson" aria-label="Menu Contact Person" class="inline-block text-base hover:text-white transition-colors duration-200">Contact Person</a>
            </li>
            </ul>
        </div>
        </div>
        <div class="w-full pt-10 border-t border-white">
            <div class="flex items-center pb-4 mx-4 mt-3 justify-start">
                {{-- Youtube --}}
                <a href="https://www.youtube.com/@hmtiuniversitasudayana2028" target="_blank" class="w-12 h-12 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-Primary hover:bg-Primary hover:text-white transition ease-in-out delay-50" >
                    <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                        <title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
                {{-- Instagram --}}
                <a href="https://www.instagram.com/hmtiudayana/" target="_blank" class="w-12 h-12 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-Primary hover:bg-Primary hover:text-white transition ease-in-out delay-50" >
                    <svg role="img" width="30" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" >
                        <title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                </a>
                <p class=" text-white text-base">Copyright © 2024 All rights reserved.</p>
            </div>
        </div>
    </div>
    </footer>
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

    // Menangani klik pada tombol dropdown
const dropdownToggle = document.getElementById('dropdownToggle');
const dropdownMenu = document.getElementById('dropdownMenu');

// Toggle dropdown saat tombol diklik
dropdownToggle.addEventListener('click', () => {
    dropdownMenu.classList.toggle('hidden');
});

// Menutup dropdown jika klik di luar dropdown
window.addEventListener('click', (e) => {
    if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
    }
});
</script>
</body>
</html>