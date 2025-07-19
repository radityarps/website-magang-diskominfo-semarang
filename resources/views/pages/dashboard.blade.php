@extends('layouts.app')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    body,
    .container-fluid {
        font-family: 'Inter', sans-serif;
        background-color: transparent !important;
        color: #f1f1f1 !important;
    }

    .card-modern {
        background: rgba(255, 255, 255, 0.05); /* transparan ke putih agar blur terlihat */
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px); /* penting untuk dukungan Safari/Chrome */
        border-radius: 20px;
        overflow: hidden;
        color: #fff;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.4);
        border: 1px solid rgba(255, 255, 255, 0.1);
        width: 100%;
        max-width: 320px;
        margin: 2rem auto;
    }

    .card-modern-header {
        background: rgba(139, 92, 246, 0.7); /* semi-transparan ungu */
        height: 100px;
        padding: 1rem;
        position: relative;
    }

    .card-modern-tag {
        position: absolute;
        top: 1rem;
        right: 1rem;
        font-size: 0.85rem;
        color: #fff;
        text-align: right;
        line-height: 1.2;
    }

    .card-modern-body {
        padding: 1.25rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 180px;
    }

    .card-modern-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .card-modern-subtitle {
        font-size: 0.85rem;
        color: #ccc;
    }

    .card-modern-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
        padding-top: 1rem;
        font-size: 0.9rem;
        color: #aaa;
    }

    .grid-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    /* Video background */
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
        background: rgba(0,0,0,0.5);
        z-index: -1;
    }

    .container-fluid {
        position: relative;
        z-index: 1;
    }
</style>


<!-- CONTENT -->
<div class="container-fluid">
    @if(Auth::user()->role_id == 1)
    <div class="grid-cards">
        <!-- Card 1 -->
        <div class="card-modern">
            <div class="card-modern-header">
                <div class="card-modern-tag">
                    Admin<br><strong>Total Mahasiswa</strong>
                </div>
            </div>
            <div class="card-modern-body">
                <div>
                    <div class="card-modern-title">{{ $totalMahasiswa }}</div>
                    <div class="card-modern-subtitle">Terdaftar dalam sistem</div>
                </div>
                <div class="card-modern-footer">
                    <span><i class="fas fa-users"></i> Mahasiswa</span>
                    <span class="note-count">Data Valid</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card-modern">
            <div class="card-modern-header">
                <div class="card-modern-tag">
                    Hari Ini<br><strong>Sudah Mengumpulkan</strong>
                </div>
            </div>
            <div class="card-modern-body">
                <div>
                    <div class="card-modern-title">{{ $sudahMengumpulkan }}</div>
                    <div class="card-modern-subtitle">+{{ $sudahMengumpulkan }} Mahasiswa</div>
                </div>
                <div class="card-modern-footer">
                    <span>Progress</span>
                    <span class="note-count">Update Harian</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card-modern">
            <div class="card-modern-header">
                <div class="card-modern-tag">
                    Hari Ini<br><strong>Belum Mengumpulkan</strong>
                </div>
            </div>
            <div class="card-modern-body">
                <div>
                    <div class="card-modern-title">{{ $belumMengumpulkan }}</div>
                    <div class="card-modern-subtitle">Perlu perhatian lebih</div>
                </div>
                <div class="card-modern-footer">
                    <span>Status</span>
                    <span class="note-count">Segera Follow-up</span>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- USER ROLE -->
    <div class="grid-cards">
        <div class="card-modern">
            <div class="card-modern-header">
                <div class="card-modern-tag">
                    Status Tugas<br><strong>Hari Ini</strong>
                </div>
            </div>
            <div class="card-modern-body">
                <div>
                    <div class="card-modern-title">
                        @if($sudahMengumpulkanHariIni)
                            <span style="color: #22c55e;">Sudah Mengumpulkan</span>
                        @else
                            <span style="color: #ef4444;">Belum Mengumpulkan</span>
                        @endif
                    </div>
                    <div class="card-modern-subtitle">Tugas harian Anda</div>
                </div>
                <div class="card-modern-footer">
                    <span>Reminder</span>
                    <span class="note-count">Check Deadline</span>
                </div>
            </div>
        </div>

        <div class="card-modern">
            <div class="card-modern-header">
                <div class="card-modern-tag">
                    Total<br><strong>Tugas Terkumpul</strong>
                </div>
            </div>
            <div class="card-modern-body">
                <div>
                    <div class="card-modern-title">{{ $totalTugas }}</div>
                    <div class="card-modern-subtitle">Seluruh periode</div>
                </div>
                <div class="card-modern-footer">
                    <span>Rekapan</span>
                    <span class="note-count">Terupdate</span>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
