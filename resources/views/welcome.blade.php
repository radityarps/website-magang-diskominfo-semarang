<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magang Diskominfo - Future Digital Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0066ff;
            --secondary-blue: #003dc7;
            --accent-cyan: #00d4ff;
            --dark-bg: #0a0e1a;
            --card-bg: rgba(255, 255, 255, 0.05);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --text-primary: #ffffff;
            --text-secondary: #a8b2d1;
            --glow-color: #00d4ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-bg);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background: linear-gradient(45deg, #0a0e1a, #1a1f35, #0a0e1a);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        .bg-animation::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 20% 50%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(0, 102, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(0, 61, 199, 0.1) 0%, transparent 50%);
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        /* Particle System */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--accent-cyan);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
            opacity: 0.6;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
            50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
        }

        /* Glass Morphism Effect */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        /* Navigation */
        .navbar {
            background: rgba(10, 14, 26, 0.9);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-primary) !important;
            text-shadow: 0 0 20px var(--glow-color);
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            text-shadow: 0 0 30px var(--glow-color);
            transform: scale(1.05);
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 15px;
            filter: drop-shadow(0 0 10px var(--glow-color));
        }

        .nav-link {
            color: var(--text-secondary) !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-cyan), var(--primary-blue));
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover {
            color: var(--text-primary) !important;
            text-shadow: 0 0 10px var(--glow-color);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-futuristic {
            background: linear-gradient(45deg, var(--primary-blue), var(--accent-cyan));
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
        }

        .btn-futuristic::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-futuristic:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 30px rgba(0, 212, 255, 0.5);
            color: white;
        }

        .btn-futuristic:hover::before {
            left: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 120px 0 80px;
        }

        .hero-content h1 {
            font-family: 'Orbitron', monospace;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary-blue), var(--accent-cyan), #ffffff);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: textGlow 3s ease-in-out infinite alternate;
            margin-bottom: 2rem;
            line-height: 1.2;
        }

        .hero-content .subtitle {
            font-size: 1.3rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        @keyframes textGlow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .floating-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
            margin: 1rem;
            animation: floatCard 6s ease-in-out infinite;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }

        .floating-card:nth-child(2) { animation-delay: 2s; }
        .floating-card:nth-child(3) { animation-delay: 4s; }

        @keyframes floatCard {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-15px) rotate(1deg); }
            66% { transform: translateY(-10px) rotate(-1deg); }
        }

        /* Stats Section */
        .stats-section {
            padding: 100px 0;
            background: linear-gradient(135deg, rgba(0, 102, 255, 0.1), rgba(0, 212, 255, 0.05));
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.2);
        }

        .stat-number {
            font-family: 'Orbitron', monospace;
            font-size: 3rem;
            font-weight: 700;
            color: var(--accent-cyan);
            text-shadow: 0 0 20px var(--glow-color);
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-top: 0.5rem;
        }

        /* Features Section */
        .features-section {
            padding: 100px 0;
        }

        .feature-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-blue), var(--accent-cyan));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--accent-cyan);
            margin-bottom: 1.5rem;
            text-shadow: 0 0 20px var(--glow-color);
        }

        .feature-title {
            font-family: 'Orbitron', monospace;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        /* Partners Section */
        .partners-section {
            padding: 80px 0;
            background: linear-gradient(135deg, rgba(0, 61, 199, 0.1), rgba(0, 102, 255, 0.05));
        }

        .partner-track {
            display: flex;
            gap: 3rem;
            animation: scrollPartners 20s linear infinite;
            align-items: center;
        }

        .partner-logo {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 150px;
            height: 80px;
            transition: all 0.3s ease;
        }

        .partner-logo:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
        }

        .partner-logo img {
            max-height: 50px;
            max-width: 120px;
            object-fit: contain;
            filter: brightness(1.2);
        }

        @keyframes scrollPartners {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* Gallery Section */
        .gallery-section {
            padding: 100px 0;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            aspect-ratio: 4/3;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 102, 255, 0.3), rgba(0, 212, 255, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item:hover {
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.3);
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 30% 40%, rgba(0, 212, 255, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 70% 60%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: rotateCTA 20s linear infinite;
        }

        @keyframes rotateCTA {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .cta-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .cta-title {
            font-family: 'Orbitron', monospace;
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        /* Footer */
        .footer {
            background: var(--dark-bg);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 50px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h5 {
            font-family: 'Orbitron', monospace;
            color: var(--accent-cyan);
            margin-bottom: 1rem;
        }

        .footer-section p, .footer-section a {
            color: var(--text-secondary);
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--accent-cyan);
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero {
                padding: 100px 0 60px;
                text-align: center;
            }

            .hero-visual {
                margin-top: 3rem;
            }

            .floating-card {
                margin: 0.5rem;
                padding: 1.5rem;
            }

            .stat-number {
                font-size: 2.5rem;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Loading Animation */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: var(--dark-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 1s ease;
        }

        .loader {
            width: 50px;
            height: 50px;
            border: 3px solid rgba(0, 212, 255, 0.3);
            border-top: 3px solid var(--accent-cyan);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .section-title {
            font-family: 'Orbitron', monospace;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, var(--primary-blue), var(--accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-register {
            background: transparent !important;
            border: 2px solid var(--accent-cyan) !important;
            color: var(--accent-cyan) !important;
            box-shadow: none !important;
            transition: background 0.3s, color 0.3s, border-color 0.3s;
        }

    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader"></div>
    </div>

    <!-- Animated Background -->
    <div class="bg-animation"></div>

    <!-- Particles -->
    <div class="particles" id="particles"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwZDRmZiIvPgo8cGF0aCBkPSJNMTIgMTJIMjhWMTZIMTJWMTJaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTIgMjBIMjRWMjRIMTJWMjBaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBkPSJNMTIgMjhIMjhWMzJIMTJWMjhaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K" alt="Diskominfo">
                DISKOMINFO
            </a>

            <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#benefit">Benefit</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#stats">Statistik</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#partners">Mitra</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#gallery">Galeri</a>
                    </li>
                </ul>
                <a href="/register" class="btn btn-futuristic btn-register me-3">
                    <i class="fas fa-user-plus me-2"></i>Register
                </a>
                <a href="/login" class="btn btn-futuristic">
                    <i class="fas fa-sign-in-alt me-2"></i>Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>MAGANG DIGITAL MASA DEPAN</h1>
                        <p class="subtitle">
                            Bergabunglah dalam revolusi digital Indonesia. Sistem magang terintegrasi dengan teknologi AI,
                            real-time analytics, dan pengalaman immersive yang akan mengubah cara Anda belajar.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual">
                        <div class="floating-card">
                            <i class="fas fa-chart-line fa-2x text-info mb-3"></i>
                            <h6>Real-time Analytics</h6>
                            <small class="text-muted">Monitor progres secara langsung</small>
                        </div>
                        <div class="floating-card">
                            <i class="fas fa-brain fa-2x text-warning mb-3"></i>
                            <h6>AI Integration</h6>
                            <small class="text-muted">Teknologi pembelajaran adaptif</small>
                        </div>
                        <div class="floating-card">
                            <i class="fas fa-shield-alt fa-2x text-success mb-3"></i>
                            <h6>Secure Platform</h6>
                            <small class="text-muted">Keamanan tingkat enterprise</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="stats-section">
        <div class="container">
            <h2 class="section-title">Pencapaian Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-number" data-target="500">0</div>
                        <div class="stat-label">Mahasiswa Aktif</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-number" data-target="25">0</div>
                        <div class="stat-label">Institusi Partner</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-number" data-target="1200">0</div>
                        <div class="stat-label">Proyek Selesai</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="benefit" class="features-section">
        <div class="container">
            <h2 class="section-title">Benefit</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h4 class="feature-title">Smart Learning</h4>
                        <p class="text-muted">
                            Sistem pembelajaran adaptif dengan AI yang menyesuaikan konten berdasarkan
                            kemampuan dan progress individual setiap mahasiswa.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="feature-title">Real-time Dashboard</h4>
                        <p class="text-muted">
                            Monitor progres, statistik kinerja, dan analisis mendalam dengan
                            dashboard interaktif yang update secara real-time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <h4 class="feature-title">Cloud Integration</h4>
                        <p class="text-muted">
                            Upload dan kelola laporan harian dengan sistem cloud storage
                            yang aman dan dapat diakses dari mana saja.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="feature-title">Mobile Responsive</h4>
                        <p class="text-muted">
                            Akses platform dari smartphone, tablet, atau desktop dengan
                            pengalaman yang optimal di semua perangkat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-file-export"></i>
                        </div>
                        <h4 class="feature-title">Advanced Export</h4>
                        <p class="text-muted">
                            Export data dan laporan dalam berbagai format (PDF, Excel, CSV)
                            dengan template yang dapat dikustomisasi.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-title">Enterprise Security</h4>
                        <p class="text-muted">
                            Keamanan tingkat enterprise dengan enkripsi end-to-end,
                            two-factor authentication, dan audit trail lengkap.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="partners-section">
        <div class="container">
            <h2 class="section-title">Mitra Kami</h2>
            <div style="overflow: hidden; width: 100%;">
                <div class="partner-track">
                    <div class="partner-logo">
                        <img src="assets/udinus.png" alt="UDINUS">
                    </div>
                    <div class="partner-logo">
                        <img src="assets/undip.png" alt="UNDIP">
                    </div>
                    <div class="partner-logo">
                        <img src="assets/unissula.png" alt="UNISSULA">
                    </div>
                    <div class="partner-logo">
                        <img src="assets/univsemarang.png" alt="UNIV SEMARANG">
                    </div>
                    <div class="partner-logo">
                        <img src="assets/unnes.png" alt="UNNES">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <h2 class="section-title">Galeri Pengalaman</h2>
            <div class="gallery-grid">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m1.jpeg')">
                    <img src="assets/m1.jpeg" alt="Magang Digital 1">
                </div>
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m2.jpeg')">
                    <img src="assets/m2.jpeg" alt="Workshop Teknologi">
                </div>
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m3.jpeg' )">
                    <img src="assets/m3.jpeg" alt="Presentasi Proyek">
                </div>
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m4.jpeg')">
                    <img src="assets/m4.jpeg" alt="Tim Developer">
                </div>
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m5.jpeg')">
                    <img src="assets/m5.jpeg" alt="Certificate Award">
                </div>
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryImage('assets/m6.jpeg')">
                    <img src="assets/m6.jpeg" alt="Mentoring Session">
                </div>
            </div>
            <div class="text-center">
                <button id="showMoreGallery" class="btn btn-futuristic">
                    <i class="fas fa-images me-2"></i>Lihat Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Siap Memulai Perjalanan Bersama Kami?</h2>
                <p class="lead mb-4">
                    Bergabunglah dengan ribuan mahasiswa yang telah merasakan pengalaman magang
                    masa depan di Diskominfo Semarang.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="https://diskominfo.semarangkota.go.id/" target="_blank" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-external-link-alt me-2"></i>Info Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h5><i class="fas fa-building me-2"></i>Diskominfo Semarang</h5>
                    <p>Dinas Komunikasi dan Informatika Kota Semarang</p>
                    <p>Jl. Dr. Wahidin No. 1, Semarang</p>
                    <p>Jawa Tengah, Indonesia</p>
                </div>
                <div class="footer-section">
                    <h5><i class="fas fa-envelope me-2"></i>Kontak</h5>
                    <p>Email: magang@diskominfo.semarangkota.go.id</p>
                    <p>Telepon: (024) 123-4567</p>
                    <p>WhatsApp: +62 812-3456-7890</p>
                </div>
                <div class="footer-section">
                    <h5><i class="fas fa-link me-2"></i>Tautan</h5>
                    <p><a href="https://diskominfo.semarangkota.go.id/">Website Resmi</a></p>
                    <p><a href="/login">Portal Magang</a></p>
                    <p><a href="#features">Fitur Platform</a></p>
                    <p><a href="#gallery">Galeri</a></p>
                </div>
            </div>
            <hr style="border-color: rgba(255, 255, 255, 0.1);">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Diskominfo Semarang. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 text-center">
                    <img id="galleryModalImage" src="" alt="Gallery Image" class="img-fluid rounded">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Remove loading screen
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loadingScreen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 1000);
        });

        // Create particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.top = Math.random() * 100 + 'vh';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.getAttribute('data-target'));
                        const duration = 2000; // 2 seconds
                        const step = target / (duration / 16); // 60fps
                        let current = 0;

                        const timer = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                counter.textContent = target;
                                clearInterval(timer);
                            } else {
                                counter.textContent = Math.floor(current);
                            }
                        }, 16);

                        observer.unobserve(counter);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Gallery modal function
        function showGalleryImage(src) {
            document.getElementById('galleryModalImage').src = src;
        }

        // Show more gallery images
        let galleryExpanded = false;
        document.getElementById('showMoreGallery').addEventListener('click', function() {
            const galleryGrid = document.querySelector('.gallery-grid');
            const button = this;

            if (!galleryExpanded) {
                // Add more gallery items
                const additionalImages = [
                    { src: 'assets/m7.jpeg', alt: 'Innovation Lab' },
                    { src: 'assets/m8.jpeg', alt: 'Coding Session' },
                    { src: 'assets/m9.jpeg', alt: 'Graduating Ceremony' }
                ];

                additionalImages.forEach((img, index) => {
                    const galleryItem = document.createElement('div');
                    galleryItem.className = 'gallery-item extra-gallery-item';
                    galleryItem.setAttribute('data-bs-toggle', 'modal');
                    galleryItem.setAttribute('data-bs-target', '#galleryModal');
                    galleryItem.setAttribute('onclick', `showGalleryImage('${img.src}')`);
                    galleryItem.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
                    galleryGrid.appendChild(galleryItem);

                    // Animate in
                    setTimeout(() => {
                        galleryItem.style.opacity = '1';
                        galleryItem.style.transform = 'translateY(0)';
                    }, index * 100);
                });

                button.innerHTML = 'Sembunyikan';
                galleryExpanded = true;
            } else {
                // Remove extra items
                document.querySelectorAll('.extra-gallery-item').forEach(item => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        item.remove();
                    }, 300);
                });

                button.innerHTML = '<i class="fas fa-images me-2"></i>Lihat Lebih Banyak';
                galleryExpanded = false;
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(10, 14, 26, 0.95)';
            } else {
                navbar.style.background = 'rgba(10, 14, 26, 0.9)';
            }
        });

        // Initialize particles and animations
        createParticles();
        animateCounters();

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            const rate = scrolled * -0.5;
            hero.style.transform = `translate3d(0, ${rate}px, 0)`;
        });

        // Feature cards hover effect enhancement
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add typing effect to hero title
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';

            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            type();
        }

        // Initialize typing effect after page load
        setTimeout(() => {
            const heroTitle = document.querySelector('.hero-content h1');
            const originalText = heroTitle.textContent;
            typeWriter(heroTitle, originalText, 80);
        }, 1500);

        // Add CSS for extra gallery items animation
        const style = document.createElement('style');
        style.textContent = `
            .extra-gallery-item {
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.3s ease;
            }

            .social-links a {
                color: var(--text-secondary);
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .social-links a:hover {
                color: var(--accent-cyan);
                transform: translateY(-3px);
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
