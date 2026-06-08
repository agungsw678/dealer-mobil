@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Leads</h1>
        <p class="page-description mb-0">Kelola daftar kontak leads, status follow-up, dan sales yang bertanggung jawab.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-plus me-2"></i>Tambah Leads</a>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Total Leads</p>
            <h3 class="mb-2">87</h3>
            <p class="text-muted mb-0">Semua leads baru dan lama.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Baru</p>
            <h3 class="mb-2">21</h3>
            <p class="text-muted mb-0">Leads yang belum ditindaklanjuti.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Follow-Up</p>
            <h3 class="mb-2">42</h3>
            <p class="text-muted mb-0">Leads dalam proses follow-up.</p>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-leads">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Mobil</th>
                    <th>Kontak</th>
                    <th>Lead Source</th>
                    <th>Status</th>
                    <th>Sales</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Agus Pratama</td>
                    <td>Corolla Cross</td>
                    <td>0812-3456-7890</td>
                    <td>Website</td>
                    <td><span class="badge bg-success">Follow Up</span></td>
                    <td>Rani</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Siti Nurhaliza</td>
                    <td>Veloz</td>
                    <td>0822-9876-5432</td>
                    <td>Instagram</td>
                    <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                    <td>Bayu</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Hendra Wijaya</td>
                    <td>Fortuner</td>
                    <td>0813-1122-3344</td>
                    <td>WhatsApp</td>
                    <td><span class="badge bg-danger">Baru</span></td>
                    <td>Amelia</td>
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
        $('#table-leads').DataTable({
            responsive: true,
            pageLength: 8,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush