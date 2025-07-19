<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar dan Berkarya di Diskominfo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right, #0f051d, #1b002e);
            color: #949191;
        }
        .container, .container-fluid {
            background-color: transparent !important;
        }

        .navbar, .footer {
            background-color: rgba(0, 0, 0, 0.6) !important;
        }

        a.nav-link, .btn {
            color: #fff !important;
        }

        a.nav-link:hover, .btn:hover {
            color: #2f042e !important;
        }

        .hero img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .gallery-main img,
        .gallery-experience img {
            width: 100%;
            height: 250px; /* seragamkan tinggi */
            object-fit: cover; /* potong gambar agar seragam */
            border-radius: 8px;
            margin-bottom: 15px;
            display: block;
            cursor: zoom-in;
        }
        .video-container video, .video-container iframe {
            width: 100%;
            height: 250px;
            border-radius: 10px;
            object-fit: cover;
        }
        .mitra img {
            max-height: 60px;
            object-fit: contain;
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 30px 0;
        }
        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }
        .mitra-marquee-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
}

.mitra-marquee {
    display: flex;
    gap: 40px;
    animation: slideLeft 20s linear infinite;
}

.mitra-marquee img {
    max-height: 60px;
    object-fit: contain;
    padding: 10px;
}

.mitra-wrapper {
        overflow: hidden;
        width: 100%;
        height: 80px;
        position: relative;
    }

    .mitra-track {
        display: flex;
        align-items: center;
        gap: 50px;
        animation: marqueeLeft 25s linear infinite;
        width: max-content;
    }

    .mitra-track img {
        height: 60px;
        object-fit: contain;
        padding: 10px 20px;
    }
    /* Bungkus teks */
.running-text-wrapper {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    background: #f8f9fa;
    border-radius: 10px;
    padding: 10px 0;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

/* Teks berjalan + efek */
.running-text {
    display: inline-block;
    padding-left: 100%;
    font-size: 1.2rem;
    font-weight: 600;
    color: #000000;
    animation: marqueeZigZag 20s linear infinite;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    letter-spacing: 1px;
}

.footer {
    width: 100%;
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 30px 0;
}

/* Navbar Gradien & Modern Look */
.custom-navbar {
    background: linear-gradient(to bottom right, #0f051d, #1b002e);
    box-shadow: 0 4px 20px rgba(128, 0, 128, 0.2);
    padding: 12px 0;
    z-index: 1000;
}

/* Nav Links */
.custom-navbar .nav-link {
    color: #ffffff !important;
    transition: color 0.3s ease;
}

.custom-navbar .nav-link:hover {
    color: #e0b3ff !important;
}

/* Navbar Button */
.custom-navbar .btn-outline-light {
    border-color: #fff;
    color: #fff;
    transition: background 0.3s, color 0.3s;
    border-radius: 20px;
}

.custom-navbar .btn-outline-light:hover {
    background: #ffffff;
    color: #6a34d1;
}

/* Kotak institusi */
        .institusi-box {
            background-color: #1f1b2d;
            border: 1.5px solid #3f2b62;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(123, 47, 255, 0.2);
            color: #ddd;
        }

        /* Logo marquee */
        .logo-marquee {
            overflow: hidden;
            width: 100%;
            height: 100px;
            position: relative;
            background: #2a2143;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(147, 112, 219, 0.3);
        }
        .logo-track {
            display: inline-flex;
            gap: 30px;
            white-space: nowrap;
            will-change: transform;
            align-items: center;
            height: 100%;
            padding: 0 20px;
        }
        .logo-box {
            background: #3a2c66;
            border: 1.5px solid #6e57b3;
            border-radius: 12px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80px;
            width: 140px;
            box-shadow: 0 1px 6px rgba(183, 104, 255, 0.4);
            transition: box-shadow 0.3s ease, border-color 0.3s ease;
            flex-shrink: 0;
        }
        .logo-box:hover {
            box-shadow: 0 4px 14px rgba(199, 115, 255, 0.9);
            border-color: #b97aff;
        }
        .logo-box img {
            max-height: 60px;
            max-width: 100%;
            object-fit: contain;
            user-select: none;
            pointer-events: none;
            filter: brightness(0.75);
            transition: filter 0.3s ease;
        }
        .logo-box:hover img {
            filter: brightness(1);
        }
/* Keyframe dengan zigzag halus */
@keyframes marqueeZigZag {
    0% {
        transform: translateX(0) translateY(0);
    }
    25% {
        transform: translateX(-25%) translateY(-2px);
    }
    50% {
        transform: translateX(-50%) translateY(2px);
    }
    75% {
        transform: translateX(-75%) translateY(-2px);
    }
    100% {
        transform: translateX(-100%) translateY(0);
    }
}

  @keyframes marqueeLeft {
        0% {
            transform: translateX(50%);
        }
        100% {
            transform: translateX(-200%);
        }
    }

        @media (min-width: 768px) {
    .gallery-main img,
    .gallery-experience img {
        height: 250px;
    }
}

html {
    scroll-behavior: smooth;
}

.custom-navbar.sticky-top {
    box-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

@keyframes scrollLogo {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.logo-marquee .logo-track {
    display: flex;
    gap: 30px;
    animation: scrollLogo 5s linear infinite;
    width: max-content;
}

    </style>
</head>
<div id="floating-helper" style="
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 9999;
    width: 160px;
    height: auto;
    margin: 0;
    padding: 0;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    border-radius: 0;
    overflow: hidden;
">
<img id="helperGif" src="" style="width: 100%; height: auto;">
<script>
    const gifMap = {
        0: "{{ asset('assets/hanry_minggu.gif') }}",
        1: "{{ asset('assets/hanryanimate_senin.gif') }}",
        2: "{{ asset('assets/hanryanimate_selasa.gif') }}",
        3: "{{ asset('assets/hanryanimate_rabu.gif') }}",
        4: "{{ asset('assets/hanry_kamis.gif') }}",
        5: "{{ asset('assets/hanryanimate_jumat.gif') }}",
        6: "{{ asset('assets/hanry_sabtu.gif') }}"
    };

    const hari = new Date().getDay(); // 0 = Minggu, 1 = Senin, dst
    document.getElementById('helperGif').src = gifMap[hari];
</script>

</div>

<body id="top">
<nav class="navbar navbar-expand-lg custom-navbar sticky-top">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand text-white fw-bold" href="#">
            <img src="{{ asset('assets/diskominfo.jpg') }}" alt="Diskominfo" style="height: 40px;">
        </a>

        <!-- Navbar Toggle (Mobile) -->
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link text-white fw-medium" href="#top">Home</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white fw-medium" href="#kontribusi">Kontribusi</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-white fw-medium" href="#galeri">Galeri</a>
                </li>
            </ul>
        </div>

        <!-- Login Button -->
        <div class="d-flex">
            <a class="btn btn-outline-light btn-sm fw-semibold" href="/login">
                Login / Daftar Magang
            </a>
        </div>
    </div>
</nav>

    <div class="container my-4 hero">
        <img src="{{ asset('assets/Belajar_Kominfo.png') }}" alt="Belajar dan Berkarya di Diskominfo">
    </div>

<div class="container text-center my-5">
    <div class="running-text-wrapper">
        <div class="running-text">
            Tempat terbaik untuk tumbuh – Pengalaman Magang yang membentuk masa depan –
        </div>
    </div>
</div>

<div class="container gallery-main text-center">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3 mb-3">
            <img src="{{ asset('assets/magang1.jpeg') }}" alt="img1" class="img-gallery img-fluid mx-auto d-block">
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <img src="{{ asset('assets/magang2.jpeg') }}" alt="img2" class="img-gallery img-fluid mx-auto d-block">
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <img src="{{ asset('assets/magang3.jpeg') }}" alt="img3" class="img-gallery img-fluid mx-auto d-block">
        </div>
        <div class="col-md-6 col-lg-3 mb-3">
            <img src="{{ asset('assets/magang4.jpeg') }}" alt="img4" class="img-gallery img-fluid mx-auto d-block">
        </div>
    </div>
</div>



    <div id="kontribusi" class="container text-center my-5">
        <h6 class="fw-bold">Institusi Pendidikan yang Telah Berkontribusi Bersama Diskominfo</h6>

<div class="container my-5" id="institusi">
        <div class="institusi-box p-4 rounded shadow-sm">
            <h6 class="fw-bold text-center mb-4">Institusi Pendidikan yang Telah Berkontribusi Bersama Diskominfo</h6>
            <div class="logo-marquee">
                <div class="logo-track" id="logo-track">
                    <div class="logo-box">
                        <img src="{{ asset('assets/udinus.png') }}" alt="mitra1" />
                    </div>
                    <div class="logo-box">
                        <img src="{{ asset('assets/undip.png') }}" alt="mitra2" />
                    </div>
                    <div class="logo-box">
                        <img src="{{ asset('assets/unissula.png') }}" alt="mitra3" />
                    </div>
                    <div class="logo-box">
                        <img src="{{ asset('assets/univsemarang.png') }}" alt="mitra4" />
                    </div>
                    <div class="logo-box">
                        <img src="{{ asset('assets/unnes.png') }}" alt="mitra5" />
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="galeri" class="container text-center my-5">
    <h6 class="fw-bold">Pengalaman magang menantimu</h6>
        <p>Jelajahi perjalanan kami dalam dunia profesional melalui kegiatan magang penuh makna</p>

<div class="row gallery-experience">
    <!-- Gambar awal -->
    <div class="col-md-4"><img src="{{ asset('assets/m1.jpeg') }}" alt="magang1" class="img-fluid"></div>
    <div class="col-md-4"><img src="{{ asset('assets/m2.jpeg') }}" alt="magang2" class="img-fluid"></div>
    <div class="col-md-4"><img src="{{ asset('assets/m3.jpeg') }}" alt="magang3" class="img-fluid"></div>
    <div class="col-md-4"><img src="{{ asset('assets/m4.jpeg') }}" alt="magang4" class="img-fluid"></div>
    <div class="col-md-4"><img src="{{ asset('assets/m5.jpeg') }}" alt="magang5" class="img-fluid"></div>
    <div class="col-md-4"><img src="{{ asset('assets/m6.jpeg') }}" alt="magang6" class="img-fluid"></div>

    <!-- Gambar tambahan (disembunyikan dulu) -->
    <div class="col-md-4 extra-image d-none"><img src="{{ asset('assets/m7.jpeg') }}" alt="magang7" class="img-fluid"></div>
    <div class="col-md-4 extra-image d-none"><img src="{{ asset('assets/m8.jpeg') }}" alt="magang8" class="img-fluid"></div>
    <div class="col-md-4 extra-image d-none"><img src="{{ asset('assets/m9.jpeg') }}" alt="magang9" class="img-fluid"></div>
</div>

    <footer class="footer text-center w-100">
        <!-- Tombol Toggle -->
<button id="toggleImagesBtn" class="btn btn-danger mt-3">Tampilkan Lainnya</button>

    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h6 class="fw-bold">Selengkapnya tentang magang kominfo</h6>
                <p>Kunjungi website "SIMAKI" untuk keterangan lebih lanjut</p>
                <a class="btn btn-danger" href="https://diskominfo.semarangkota.go.id/" target="_blank" rel="noopener noreferrer">
                    Kunjungi SIMAKI
</a></a>            </div>
            <div class="col-md-6 video-container">
<video autoplay muted loop controls>
    <source src="{{ asset('assets/magangbos.mp4') }}" type="video/mp4">
    Browser Anda tidak mendukung tag video.
</video>

<audio id="bg-music" loop>
    <source src="{{ asset('assets/bs.mp3') }}" type="audio/mp3">
    Browser Anda tidak mendukung pemutar audio.
</audio>
<div id="music-control" style="
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    cursor: pointer;
    background-color: #fff;
    color: #dc3545;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    padding: 15px;
    font-size: 22px;
">
    <i id="music-icon" class="fas fa-music"></i>
</div>
            </div>
        </div>
    </div>

        <div class="container-fluid py-2" style="background-color: #000; color: #fff;">
            <h6 class="mb-2">Team</h6>
            <p class="mb-1">Kevin Korhan A<br>Alfian Fikri Y<br>Sony Timotius W</p>
            <p class="mt-3 mb-0">&copy; 2025 Diskominfo Semarang</p>
        </div>

    </footer>

        <!-- Modal Zoom Gambar -->
<div class="modal fade" id="zoomModal" tabindex="-1" aria-labelledby="zoomModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body p-0 text-center">
        <img id="zoomImage" src="" alt="Zoom" class="img-fluid rounded">
      </div>
    </div>
  </div>
</div>




    <script>
    // Saat gambar diklik, tampilkan di modal
    document.querySelectorAll('.gallery-main img, .gallery-experience img').forEach(img => {
        img.addEventListener('click', function () {
            const zoomImg = document.getElementById('zoomImage');
            zoomImg.src = this.src;
            const zoomModal = new bootstrap.Modal(document.getElementById('zoomModal'));
            zoomModal.show();
        });
    });
</script>
<!-- Load Bootstrap JS bundle (modal, dll) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('toggleImagesBtn').addEventListener('click', function() {
        const extraImages = document.querySelectorAll('.extra-image');
        const isHidden = extraImages[0].classList.contains('d-none');

        extraImages.forEach(img => img.classList.toggle('d-none'));

        // Ubah teks tombol
        this.textContent = isHidden ? 'Sembunyikan' : 'Tampilkan Lainnya';
    });
</script>
<script>
const music = document.getElementById('bg-music');
const icon = document.getElementById('music-icon');

let isPlaying = false;

document.getElementById('music-control').addEventListener('click', () => {
    if (isPlaying) {
        music.pause();
        icon.src = "{{ asset('assets/icon-music.svg') }}"; // ikon play
    } else {
        music.play().catch(() => alert('Interaksi pengguna diperlukan untuk memutar musik.'));
        icon.src = "{{ asset('assets/icon-pause.svg') }}"; // ikon pause
    }
    isPlaying = !isPlaying;
});
</script>





</body>
</html>
