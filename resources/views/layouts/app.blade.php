<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelaporan Magang</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        * {
            font-family: 'Outfit', sans-serif !important;
        }

        /* Background transparan & dark mode */
        body, #wrapper, #content-wrapper, #content, .container-fluid, .modal-content {
            background-color: transparent !important;
            color: #ffffff !important;
        }

        .card, .bg-white, .bg-light {
            background-color: rgba(31, 31, 31, 0.85) !important;
            color: #ffffff !important;
            border: none;
        }

        .dropdown-menu, .modal-header, .modal-footer {
            background-color: #1a1a1a !important;
            color: #ffffff !important;
        }

        .nav-link, .dropdown-item {
            color: #f1f1f1 !important;
        }

        .dropdown-item:hover, .nav-link:hover {
            background-color: #2a2a2a !important;
        }

        .text-dark {
            color: #ffffff !important;
        }

        .btn, .form-control, .form-select {
            background-color: #2a2a2a !important;
            color: #ffffff !important;
            border: 1px solid #444 !important;
        }

        .form-control::placeholder {
            color: #cccccc !important;
        }

        .scroll-to-top {
            background-color: #333 !important;
            color: #fff !important;
        }

        /* Navbar Transparan */
        .navbar {
            background-color: transparent !important;
            box-shadow: none !important;
            border: none !important;
        }

            .navbar .nav-link {
        color: white !important;
        transition: color 0.3s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus,
        .navbar .nav-item.active .nav-link {
            color: #ff7f50 !important; /* coral or soft orange */
            background-color: transparent !important;
            box-shadow: none !important;
        }

        /* Jarak atas agar konten tidak tertutup navbar */
        body {
            padding-top: 72px; /* sesuai tinggi navbar */
        }

        /* Video Background */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .overlay-dark {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }
    </style>
</head>

<body id="page-top">
    <video autoplay muted loop class="video-bg">
    <source src="{{ asset('assets/bgmove.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="overlay-dark"></div>

    @yield('video-background')

    <!-- Navbar Transparan -->
    @include('layouts.navbar')

    <!-- Content -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

        @include('layouts.footer')
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form action="/logout" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi Logout?</h5>
                        <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">Apakah anda yakin untuk keluar dari aplikasi?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Keluar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
