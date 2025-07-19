@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #0f0f1c !important;
        color: white;
    }

    .card, .table {
        background-color: rgba(30, 30, 47, 0.85) !important;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(138, 43, 226, 0.15);
    }

    .card-header, .card-body {
        background-color: transparent !important;
        border: none;
    }

    .table thead {
        background-color: #2d2d44 !important;
        color: #ccc;
    }

    .table td, .table th {
        vertical-align: middle;
        border: none;
    }

    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.03) !important;
    }

    .badge {
        font-size: 12px;
        padding: 6px 12px;
        border-radius: 20px;
    }

    .btn-outline-info,
    .btn-outline-danger {
        border-radius: 50%;
        padding: 6px 9px;
        font-size: 0.85rem;
        color: #eee;
        border-color: #888;
        background-color: #222;
    }

    .btn-outline-info:hover,
    .btn-outline-danger:hover {
        background-color: #8a2be2;
        color: white;
        border-color: #8a2be2;
    }

    .form-control {
        background-color: #2d2d44;
        border: none;
        color: white;
        padding: 10px 16px;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background-color: #2d2d44;
        color: white;
        border: 1px solid #8a2be2;
        box-shadow: 0 0 6px rgba(138, 43, 226, 0.4);
    }

    input::placeholder {
        color: #aaa;
    }

    .btn-outline-light {
        background-color: #2e2e3e;
        color: white;
        border: none;
    }

    .btn-outline-light:hover {
        background-color: #8a2be2;
        color: white;
        box-shadow: 0 0 8px rgba(138, 43, 226, 0.6);
    }

    h2, h5, th, td, label {
        font-family: 'Montserrat', sans-serif;
    }

    .custom-dark-table {
    background-color: transparent !important;
    color: white;
}

.custom-dark-table thead {
    background-color: rgba(255, 255, 255, 0.05) !important;
}

.custom-dark-table tbody tr:hover {
    background-color: rgba(138, 43, 226, 0.08) !important;
}

.form-control:focus {
    box-shadow: 0 0 10px rgba(138, 43, 226, 0.6);
}

.card {
    box-shadow: 0 0 15px rgba(138, 43, 226, 0.1);
    border: 1px solid rgba(138, 43, 226, 0.3);
}

/* Table Modern Style */
.table-modern {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 12px;
    color: #fff;
    font-size: 14px;
}

.table-modern thead tr {
    background-color: transparent;
    color: #aaa;
    font-weight: 600;
}

.table-modern tbody tr {
    background-color: rgba(30, 30, 47, 0.85);
    backdrop-filter: blur(10px);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.table-modern tbody tr:hover {
    background-color: rgba(108, 99, 255, 0.1);
    transform: scale(1.01);
}

.table-modern th, .table-modern td {
    padding: 14px 20px;
    vertical-align: middle;
    border: none;
}

.table-modern td:first-child {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}
.table-modern td:last-child {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

</style>

<div class="container-fluid px-4 py-4">
    <h2 class="mb-4 text-white">Daftar Anak Magang</h2>

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

    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 text-white">Data Akun</h5>
            <form class="d-flex align-items-center" role="search">
                <input type="text" id="searchInput" class="form-control me-2" placeholder="Cari nama anak magang...">
                <button type="button" id="clearSearch" class="btn btn-outline-light">
                    <i class="fas fa-times"></i>
                </button>
            </form>
        </div>
        <div class="card-body p-0">
            @if(count($users) > 0)
                <div class="table-responsive">
                <table class="table table-modern">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Universitas</th>
                            <th>Jurusan</th>
                            <th>Bidang</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tableData">
                        @include('pages.account-list.table-data')
                    </tbody>
                </table>
                </div>
                <div id="pagination" class="mt-3">
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>
            @else
                <div class="text-center py-5">
                    <div class="mb-3">
                        <i class="fas fa-exclamation-circle fa-3x text-gray-300"></i>
                    </div>
                    <h5 class="text-gray-500 mb-0">Tidak ada data</h5>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        let typingTimer;
        const doneTypingInterval = 500;

        function performSearch() {
            const searchTerm = $('#searchInput').val();
            $.ajax({
                url: '{{ url("/account-list") }}',
                type: 'GET',
                data: {
                    search: searchTerm
                },
                success: function(response) {
                    $('#tableData').html(response.table_data);
                    $('#pagination').html(response.pagination);
                }
            });
        }

        $('#searchInput').on('keyup', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(performSearch, doneTypingInterval);
        });

        $('#clearSearch').on('click', function() {
            $('#searchInput').val('');
            performSearch();
        });
    });
</script>
@endsection
