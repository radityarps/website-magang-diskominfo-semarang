@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 pt-3">
@if (session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            iconColor: '#10b981',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#1e1e2f',
            color: '#f9fafb',
        });

        Toast.fire({
            icon: 'success',
            title: '{{ session()->get('success') }}'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            title: "Gagal!",
            text: "{{ session()->get('error') }}",
            icon: "error"
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            title: "Terjadi kesalahan",
            text: "@foreach ($errors->all() as $error) {{ $error }} {{ $loop->last ? '' : ', ' }} @endforeach",
            icon: "error"
        });
    </script>
@endif

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-white">Pengumpulan Tugas</h1>
    @php
        use Carbon\Carbon;
        $anakMagang = \App\Models\AnakMagang::where('user_id', auth()->id())->first();
        $now = Carbon::now('Asia/Jakarta');
        $isAllowedTime = $now->hour >= 6 && $now->hour < 17;
    @endphp

    @if(!$anakMagang)
        <div class="alert alert-warning mb-4" role="alert">
            <strong>Akun Anda belum terhubung dengan data magang.</strong> Silakan hubungi admin untuk menghubungkan akun Anda.
        </div>
    @elseif($anakMagang && $isAllowedTime)
        <a href="/submission/create" class="btn btn-sm btn-success shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50 mr-1"></i> Kumpulkan Screenshots
        </a>
    @elseif($anakMagang && !$isAllowedTime)
        <button class="btn btn-sm btn-secondary shadow-sm" disabled title="Pengumpulan hanya dibuka pukul 06.00 - 17.00 WIB">
            <i class="fas fa-clock fa-sm text-white-50 mr-1"></i> Kumpulkan Screenshots
        </button>
    @endif
</div>

<div class="row">
    @forelse ($submission->where('user_id', auth()->id()) as $index)
    <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-lg" style="border-radius: 1.5rem; overflow: hidden; background-color: #111111;">
            <div style="height: 120px; background: linear-gradient(to right, #8b5cf6, #ec4899); position: relative;">
                <div style="position: absolute; bottom: 0; width: 100%; background-color: #1e1e2f; border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                    <div class="p-3">
                        <h6 class="mb-0 text-white">Status:
                            @if($index->status == 'new') Baru
                            @elseif($index->status == 'processing') Diproses
                            @else Selesai
                            @endif
                        </h6>
                        <small class="text-muted">Tanggal: {{ $index->report_date->format('d M Y') }}</small>
                    </div>
                </div>
            </div>
            <div class="card-body text-white" style="background-color: #1e1e2f;">
                <div class="mb-2">
                    <div class="row g-2">
                        @foreach($index->images as $image)
                        <div class="col-auto">
                            <a href="{{ url('/storage/foto_tugas/' . basename($image->image_path)) }}" target="_blank">
                                <img src="{{ url('/storage/foto_tugas/' . basename($image->image_path)) }}"
                                     alt="Foto Tugas"
                                     class="img-fluid rounded"
                                     style="width: 70px; height: 70px; object-fit: cover;">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="text-white fw-semibold">@if($index->is_valid) Valid @else Belum Valid @endif</span>
                    </div>
                    <div>
                        <a href="/submission/{{ $index->id }}/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmationDelete{{ $index->id }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('pages.submission.confirmation-delete')
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <i class="fas fa-tasks fa-3x text-gray-300 mb-3"></i>
        <h5 class="text-gray-500 mb-0">Belum ada pengumpulan tugas</h5>
        <p class="text-gray-500">Klik tombol "Buat Tugas" untuk mengumpulkan tugas baru</p>
    </div>
    @endforelse
</div>

@if ($submission->lastPage() > 1)
    <div class="card-footer">
        {{ $submission->links('pagination::bootstrap-5') }}
    </div>
@endif
</div>
<style>
    body {
    padding-top: 70px; /* atau 80px tergantung tinggi navbar */
}
</style>
@endsection
