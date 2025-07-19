@extends('layouts.app')

@section('content')
<div class="container">
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

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Kirimkan Screenshots</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('submission.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="photos" class="form-label">Foto Tugas (Minimal 3, Maksimal 5)</label>
                            <input type="file" class="form-control" 
                                   id="photos" name="photos[]" multiple accept="image/*" required>
                            <small class="text-muted">Format: JPG, JPEG, PNG. Maksimal 2MB per foto</small>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('submission.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Kirim Tugas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
