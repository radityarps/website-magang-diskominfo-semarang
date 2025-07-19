@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Akun</h1>
    </div>

    <!-- Edit Form -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form action="{{ route('account.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control bg-light" value="{{ $user->email }}" readonly>
                            <small class="text-muted">Email tidak dapat diubah</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="university">Universitas</label>
                            <input type="text" class="form-control" name="university" value="{{ $user->university }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="field_of_study">Jurusan</label>
                            <input type="text" class="form-control" name="field_of_study" value="{{ $user->field_of_study }}" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="bidang">Bidang</label>
                            <select class="form-control" name="bidang" required>
                                <option value="" disabled>Pilih Bidang</option>
                                @php
                                    $options = [
                                        'Pengembangan Komunikasi Publik',
                                        'Sistem Pemerintahan Berbasis Elektronik',
                                        'Pengelolaan Informasi Dan Saluran Komunikasi Publik',
                                        'Pengelolaan Infrastruktur',
                                        'Statistik',
                                        'Sekretariat'
                                    ];
                                @endphp
                                @foreach ($options as $option)
                                    <option value="{{ $option }}" {{ $user->bidang === $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ url('/account-list') }}" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
