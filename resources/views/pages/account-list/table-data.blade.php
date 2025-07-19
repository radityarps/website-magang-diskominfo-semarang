@foreach ($users as $index => $user)
<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->universitas }}</td>
    <td>{{ $user->jurusan }}</td>
    <td>{{ $user->bidang }}</td>
    <td>
        @if($user->profile_picture)
            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Foto" class="rounded-circle" width="35" height="35">
        @else
            <span class="text-muted">-</span>
        @endif
    </td>
    <td>
        @if($user->status == 'aktif')
            <span class="badge bg-success">Aktif</span>
        @else
            <span class="badge bg-secondary">Nonaktif</span>
        @endif
    </td>
    <td>
        <a href="{{ route('account.edit', $user->id) }}" class="btn btn-outline-info me-1" title="Edit">
            <i class="fas fa-edit"></i>
        </a>
        <form action="{{ route('account.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus akun ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" title="Hapus">
                <i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </td>
</tr>

<!-- Progress Foto Bar (sub-row) -->
<tr>
    <td colspan="9" class="pt-0 pb-4">
        @php
            $totalFoto = $user->jumlah_foto ?? 0;
            $maxFoto = 90;
            $persen = min(100, round(($totalFoto / $maxFoto) * 100));
        @endphp
        <div class="px-3">
            <div class="progress" style="height: 8px; background-color: #444;">
                <div class="progress-bar bg-info" role="progressbar"
                    style="width: {{ $persen }}%;" aria-valuenow="{{ $persen }}"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-white">{{ $totalFoto }} / {{ $maxFoto }} foto dikumpulkan</small>
        </div>
    </td>
</tr>
<style>
.progress {
    border-radius: 10px;
    overflow: hidden;
    background-color: #2e2e3e;
}

.progress-bar {
    background-color: #8a2be2;
    transition: width 0.6s ease;
}
</style>

@endforeach
