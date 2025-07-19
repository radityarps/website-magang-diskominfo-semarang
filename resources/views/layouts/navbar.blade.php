@php
    $menus = [
        1 => [
            (object) ['title' => 'Dashboard', 'path' => 'dashboard'],
            (object) ['title' => 'Daftar Anak Magang', 'path' => 'account-list'],
            (object) ['title' => 'Permintaan Akun', 'path' => 'account-request'],
            (object) ['title' => 'Semua Tugas', 'path' => 'admin/all-submissions'],
        ],
        2 => [
            (object) ['title' => 'Dashboard', 'path' => 'dashboard'],
            (object) ['title' => 'Pengumpulan Tugas', 'path' => 'submission'],
        ],
    ];
@endphp

<style>
    .navbar-transparent {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        padding: 1rem 2rem;
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .navbar-transparent .navbar-brand {
        font-weight: 700;
        color: #ffffff !important;
        font-size: 1.5rem;
    }

    .navbar-transparent .nav-link {
        color: #eaeaea !important;
        margin-right: 1rem;
        transition: 0.2s ease;
    }

    .navbar-transparent .nav-link.active,
    .navbar-transparent .nav-link:hover {
        color: #ff805d !important;
    }

    .navbar-transparent .btn-cta {
        background-color: #ff805d;
        border: none;
        color: white;
        font-weight: 600;
        padding: 8px 18px;
        border-radius: 25px;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .navbar-transparent .btn-cta:hover {
        background-color: #ff6742;
        color: white;
    }

    .navbar-transparent .profile-img {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        object-fit: cover;
        margin-left: 8px;
    }

    .dropdown-menu {
        background-color: #222;
        border: none;
    }

    .dropdown-item {
        color: #eee;
    }

    .dropdown-item:hover {
        background-color: #333;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-transparent fixed-top">
    <div class="container-fluid">
        <!-- Logo / Brand -->
        <a class="navbar-brand" href="/">KominfoMuda</a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main Menu -->
        <div class="collapse navbar-collapse" id="navbarMain">
            @auth
                <!-- Left Nav -->
                <ul class="navbar-nav mx-auto">
                    @foreach ($menus[auth()->user()->role_id] as $menu)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is($menu->path . '*') ? 'active' : '' }}"
                                href="/{{ $menu->path }}">
                                {{ $menu->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Right: CTA + User -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2 fw-semibold text-white">{{ auth()->user()->name }}</span>
                            <img class="profile-img"
                                src="{{ auth()->user()->profile_picture ? url('/img/profile/' . basename(auth()->user()->profile_picture)) : asset('template/img/default-profile.png') }}">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="/profile"><i class="fas fa-user me-2"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="/change-password"><i class="fas fa-cogs me-2"></i> Ubah Password</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>
