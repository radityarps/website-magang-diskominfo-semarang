<div class="modal fade" id="confirmationDelete{{ $magang->id }}" tabindex="-1" aria-labelledby="deleteLabel{{ $magang->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="deleteLabel{{ $magang->id }}">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin menghapus data anak magang <strong>{{ $magang->name }}</strong>?
            </div>
            <div class="modal-footer border-0">
                <form action="{{ route('anak_magangs.destroy', $magang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
