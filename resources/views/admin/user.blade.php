@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Sales & Admin</h1>
        <p class="page-description mb-0">Tambah, edit, dan monitor tim sales serta akun admin dealer.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-user-plus me-2"></i>Tambah Sales</a>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-sales">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Area</th>
                    <th>Kontak</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rani K.</td>
                    <td>Sales Executive</td>
                    <td>Jakarta Selatan</td>
                    <td>0812-9999-1234</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Bayu S.</td>
                    <td>Sales Manager</td>
                    <td>Bandung</td>
                    <td>0813-2222-3344</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Amelia R.</td>
                    <td>Admin Konten</td>
                    <td>Bekasi</td>
                    <td>0821-8888-7766</td>
                    <td><span class="badge bg-secondary">Libur</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#table-sales').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush
