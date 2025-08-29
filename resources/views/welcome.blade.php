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

/* Partners Section - Clean Version with Background */
.partners-section {
    padding: 100px 0;
    position: relative;
}

.partner-container {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    max-width: 1200px;
    transition: all 0.3s ease;
}

.partner-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, var(--primary-blue), var(--accent-cyan));
    transform: scaleX(0);
    transition: transform 0.3s ease;
    z-index: 1;
}

.partner-container:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.partner-container:hover::before {
    transform: scaleX(1);
}

.partner-logo-clean {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 250px;
    height: 140px;
    padding: 0;
    margin: 0 30px;
    background: none;
    border: none;
    backdrop-filter: none;
    box-shadow: none;
    transition: all 0.3s ease;
}

.partner-logo-clean:hover {
    transform: scale(1.1);
}

.partner-logo-clean img {
    max-height: 120px;
    max-width: 200px;
    width: auto;
    height: auto;
    object-fit: contain;
    filter: brightness(1.2) contrast(1.1);
    transition: all 0.3s ease;
}

.partner-logo-clean:hover img {
    filter: brightness(1.4) contrast(1.2);
    transform: scale(1.05);
}

/* Update partner track animation untuk smooth infinite scroll */
.partner-track {
    display: flex;
    gap: 0;
    animation: scrollPartnersSmooth 30s linear infinite;
    align-items: center;
    width: fit-content;
}

@keyframes scrollPartnersSmooth {
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

        /* Video Gallery Item */
        .gallery-item.video-item {
            position: relative;
            cursor: pointer;
        }

        .gallery-item.video-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item.video-item:hover video {
            transform: scale(1.1);
        }

        .video-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 2;
            pointer-events: none;
        }

        .video-overlay i {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            opacity: 0.9;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.5));
        }

        .video-overlay .video-label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
        }

        .gallery-item.video-item:hover .video-overlay i {
            transform: scale(1.1);
            color: var(--accent-cyan);
        }

        /* Modal Video Styling */
        #galleryModalVideo {
            max-width: 100%;
            max-height: 80vh;
            width: auto;
            height: auto;
        }

        @media (max-width: 768px) {
            #galleryModalVideo {
                max-height: 60vh;
            }
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

            .video-overlay i {
                font-size: 2rem;
            }

            .video-overlay .video-label {
                font-size: 0.8rem;
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

        /* Music Control Styles */
        .music-control {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }

        .music-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(0, 212, 255, 0.1);
            border: 2px solid var(--accent-cyan);
            color: var(--accent-cyan);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
        }

        .music-btn:hover {
            background: var(--accent-cyan);
            color: var(--dark-bg);
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(0, 212, 255, 0.5);
        }

        .music-btn.playing {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
            }
            50% {
                box-shadow: 0 8px 25px rgba(0, 212, 255, 0.6);
            }
            100% {
                box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
            }
        }

        .music-btn i {
            font-size: 1.2rem;
        }

        /* Custom Override for text-muted to make it brighter */
        .text-muted {
            color: #c9d1d9 !important; /* Brighter gray-light color */
        }

        /* For even more visibility, you can use this alternative */
        /* .text-muted {
            color: var(--text-secondary) !important;
        } */

        /* Hero Animation Styles */
        .hero-animation {
            position: absolute;
            bottom: 40px;
            left: 40px;
            z-index: 10;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 4px solid rgba(0, 212, 255, 0.4);
            box-shadow: 0 15px 40px rgba(0, 212, 255, 0.3);
            transition: all 0.3s ease;
            animation: heroAnimationFloat 4s ease-in-out infinite;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-animation:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 50px rgba(0, 212, 255, 0.5);
            border-color: var(--accent-cyan);
            border-width: 5px;
        }

        .hero-animation img {
            width: calc(100% - 16px);
            height: calc(100% - 16px);
            object-fit: contain;
            border-radius: 50%;
            background: transparent;
        }

        @keyframes heroAnimationFloat {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                box-shadow: 0 15px 40px rgba(0, 212, 255, 0.3);
            }
            50% {
                transform: translateY(-12px) rotate(2deg);
                box-shadow: 0 25px 50px rgba(0, 212, 255, 0.4);
            }
        }

        /* Responsive untuk mobile */
        @media (max-width: 768px) {
            .hero-animation {
                bottom: 25px;
                left: 25px;
                width: 140px;
                height: 140px;
                padding: 6px;
            }
        }

        @media (max-width: 480px) {
            .hero-animation {
                bottom: 15px;
                left: 15px;
                width: 100px;
                height: 100px;
                padding: 4px;
                border-width: 3px;
            }
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
            </div>
        </div>
    </nav>

    <!-- Background Music -->
    <audio id="backgroundMusic" loop>
        <source src="{{ asset('assets/bs.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Music Control Button -->
    <div class="music-control" id="musicControl">
        <button id="musicToggle" class="music-btn">
            <i class="fas fa-music" id="musicIcon"></i>
        </button>
    </div>

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

        <!-- Hero Animation -->
        <div class="hero-animation">
            <img id="heroAnimationImg" src="" alt="Hero Animation">
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
        <div class="partner-container">
            <div style="overflow: hidden; width: 100%;">
                <div class="partner-track">
                    <div class="partner-logo-clean">
                        <img src="assets/gifudinus.gif" alt="UDINUS">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifundip.gif" alt="UNDIP">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifunissula.gif" alt="UNISSULA">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifusm.gif" alt="UNIV SEMARANG">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifunnes.gif" alt="UNNES">
                    </div>
                    <!-- Duplicate untuk infinite scroll yang smooth -->
                    <div class="partner-logo-clean">
                        <img src="assets/gifudinus.gif" alt="UDINUS">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifundip.gif" alt="UNDIP">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifunissula.gif" alt="UNISSULA">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifusm.gif" alt="UNIV SEMARANG">
                    </div>
                    <div class="partner-logo-clean">
                        <img src="assets/gifunnes.gif" alt="UNNES">
                    </div>
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
                <div class="gallery-item video-item" data-bs-toggle="modal" data-bs-target="#galleryModal" onclick="showGalleryVideo('assets/magangbos.mp4')">
                    <video poster="assets/m1.jpeg" preload="metadata">
                        <source src="assets/magangbos.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay">
                        <i class="fas fa-play-circle"></i>
                        <span class="video-label">Video Magang</span>
                    </div>
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
                    <img id="galleryModalImage" src="" alt="Gallery Image" class="img-fluid rounded" style="display: none;">
                    <video id="galleryModalVideo" controls class="img-fluid rounded" style="display: none;">
                        <source src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Set Hero Animation based on Day of Week
        function setHeroAnimation() {
            const heroImg = document.getElementById('heroAnimationImg');
            const today = new Date();
            const dayOfWeek = today.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday

            let animationFile = '';
            let altText = '';

            // Determine which animation to use based on day
            if (dayOfWeek === 1 || dayOfWeek === 2) { // Monday or Tuesday
                animationFile = 'hanryanimate_senin.gif';
                altText = 'Hero Animation Monday-Tuesday';
            } else if (dayOfWeek === 3 || dayOfWeek === 4) { // Wednesday or Thursday
                animationFile = 'hanryanimate_rabu.gif';
                altText = 'Hero Animation Wednesday-Thursday';
            } else if (dayOfWeek === 5) { // Friday
                animationFile = 'hanryanimate_jumat.gif';
                altText = 'Hero Animation Friday';
            } else { // Saturday or Sunday (fallback to Monday animation)
                animationFile = 'hanryanimate_senin.gif';
                altText = 'Hero Animation Weekend';
            }

            // Set the image source and alt text
            heroImg.src = `{{ asset('assets/') }}/${animationFile}`;
            heroImg.alt = altText;

            // Add loading error handler
            heroImg.onerror = function() {
                console.log('Failed to load animation:', animationFile);
                // Fallback to senin animation if current animation fails to load
                this.src = `{{ asset('assets/hanryanimate_senin.gif') }}`;
                this.alt = 'Hero Animation Fallback';
            };
        }

        // Remove loading screen
        window.addEventListener('load', function() {
            const loadingScreen = document.getElementById('loadingScreen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 1000);
        });

        // Background Music Control
        const backgroundMusic = document.getElementById('backgroundMusic');
        const musicToggle = document.getElementById('musicToggle');
        const musicIcon = document.getElementById('musicIcon');
        let isPlaying = false;

        // Set initial volume
        backgroundMusic.volume = 0.3;

        musicToggle.addEventListener('click', function() {
            if (isPlaying) {
                backgroundMusic.pause();
                musicIcon.className = 'fas fa-music';
                musicToggle.classList.remove('playing');
                isPlaying = false;
            } else {
                backgroundMusic.play().catch(function(error) {
                    console.log('Error playing audio:', error);
                });
                musicIcon.className = 'fas fa-pause';
                musicToggle.classList.add('playing');
                isPlaying = true;
            }
        });

        // Auto-play music after user interaction (browser policy compliance)
        let userInteracted = false;
        const enableAutoPlay = function() {
            if (!userInteracted) {
                userInteracted = true;
                // Auto-start music after first user interaction
                setTimeout(() => {
                    if (!isPlaying) {
                        musicToggle.click();
                    }
                }, 1000);
            }
        };

        // Listen for any user interaction to enable auto-play
        document.addEventListener('click', enableAutoPlay, { once: true });
        document.addEventListener('keydown', enableAutoPlay, { once: true });
        document.addEventListener('scroll', enableAutoPlay, { once: true });

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
            const modalImage = document.getElementById('galleryModalImage');
            const modalVideo = document.getElementById('galleryModalVideo');

            // Hide video and show image
            modalVideo.style.display = 'none';
            modalVideo.pause();
            modalImage.style.display = 'block';
            modalImage.src = src;
        }

        // Gallery video modal function
        function showGalleryVideo(src) {
            const modalImage = document.getElementById('galleryModalImage');
            const modalVideo = document.getElementById('galleryModalVideo');

            // Hide image and show video
            modalImage.style.display = 'none';
            modalVideo.style.display = 'block';
            modalVideo.src = src;

            // Auto-play video when modal opens
            setTimeout(() => {
                modalVideo.play().catch(function(error) {
                    console.log('Error playing video:', error);
                });
            }, 500);
        }

        // Pause video when modal is closed
        document.getElementById('galleryModal').addEventListener('hidden.bs.modal', function () {
            const modalVideo = document.getElementById('galleryModalVideo');
            modalVideo.pause();
        });

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
        setHeroAnimation(); // Initialize hero animation based on current day

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
