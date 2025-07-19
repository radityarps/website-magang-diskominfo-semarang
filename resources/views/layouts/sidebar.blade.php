@php
    $menus = [
        1 => [
            (object) ['title' => 'Dashboard', 'path' => 'dashboard', 'icon' => 'fas fa-tachometer-alt'],
            (object) ['title' => 'Daftar Anak Magang', 'path' => 'account-list', 'icon' => 'fas fa-users'],
            (object) ['title' => 'Permintaan Akun', 'path' => 'account-request', 'icon' => 'fas fa-user-plus'],
            (object) ['title' => 'Semua Tugas', 'path' => 'admin/all-submissions', 'icon' => 'fas fa-tasks'],
        ],
        2 => [
            (object) ['title' => 'Dashboard', 'path' => 'dashboard', 'icon' => 'fas fa-tachometer-alt'],
            (object) ['title' => 'Pengumpulan Tugas', 'path' => 'submission', 'icon' => 'fas fa-upload'],
        ],
    ];
@endphp

<style>
    .sidebar-custom {
        background-color: #1e1e2d;
        min-height: 100vh;
        padding-top: 1rem;
        width: 250px;
        color: #fff;
        font-family: 'Inter', sans-serif;
    }

    .sidebar-custom a {
        color: #c3c3c3;
        display: flex;
        align-items: center;
        padding: 12px 20px;
        text-decoration: none;
        border-radius: 8px;
        transition: background 0.2s ease;
    }

    .sidebar-custom a:hover,
    .sidebar-custom .active > a {
        background-color: #2d2d44;
        color: #ffffff;
    }

    .sidebar-custom i {
        margin-right: 12px;
        min-width: 20px;
    }

    .sidebar-brand {
        font-size: 1.25rem;
        font-weight: bold;
        color: #fff;
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        padding: 0 20px;
    }

    .sidebar-logo {
        width: 38px;
        height: 38px;
        margin-right: 10px;
    }

    .sidebar-divider {
        border-top: 1px solid #333;
        margin: 1rem 0;
    }
</style>

<div class="sidebar-custom d-flex flex-column position-fixed">
    <div class="sidebar-brand">
        <img src="{{ asset('template/img/logokominfo.png') }}" alt="Logo" class="sidebar-logo">
        <span>KominfoMuda</span>
    </div>

    @auth
        @foreach ($menus[auth()->user()->role_id] as $menu)
            <div class="nav-item {{ request()->is($menu->path.'*') ? 'active' : '' }}">
                <a href="/{{ $menu->path }}">
                    <i class="{{ $menu->icon }}"></i>
                    <span>{{ $menu->title }}</span>
                </a>
            </div>
        @endforeach
    @endauth

    <div class="sidebar-divider"></div>

    <div class="text-center mt-auto mb-3">
        <button class="btn btn-sm btn-outline-light" id="sidebarToggle">Toggle Sidebar</button>
    </div>
</div>
