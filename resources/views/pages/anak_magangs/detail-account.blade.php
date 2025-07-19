<div class="modal fade" id="detailAccount{{ $magang->id }}" tabindex="-1" aria-labelledby="accountLabel{{ $magang->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="accountLabel{{ $magang->id }}">Detail Akun</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama:</strong> {{ $magang->name }}</p>
                <p><strong>Email:</strong> {{ $magang->email }}</p>
                <p><strong>Asal Universitas:</strong> {{ $magang->asal_sekolah }}</p>
                <p><strong>Jurusan:</strong> {{ $magang->jurusan }}</p>
                <p><strong>Bidang:</strong> {{ $magang->bidang }}</p>
                <p><strong>Tanggal Masuk:</strong> {{ $magang->tanggal_masuk }}</p>
                <p><strong>Tanggal Keluar:</strong> {{ $magang->tanggal_keluar }}</p>
                <!-- Tambahkan data lain jika dibutuhkan -->
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
