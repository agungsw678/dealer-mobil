@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Sales</h1>
        <p class="page-description mb-0">Pantau performa sales serta kelola kontak dan target closing.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-user-tie me-2"></i>Tambah Sales Baru</a>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Target Closing</p>
            <h3 class="mb-2">23 Unit</h3>
            <p class="text-muted mb-0">Sisa target bulan ini.</p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Leads Assign</p>
            <h3 class="mb-2">14</h3>
            <p class="text-muted mb-0">Lead tertugaskan pada tim.</p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Closing Rate</p>
            <h3 class="mb-2">72%</h3>
            <p class="text-muted mb-0">Rasio closing tim sales.</p>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <p class="text-uppercase text-muted mb-2 small">Feedback</p>
            <h3 class="mb-2">9.3</h3>
            <p class="text-muted mb-0">Skor kepuasan pelanggan.</p>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-sales-list">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Wilayah</th>
                    <th>Leads</th>
                    <th>Closing</th>
                    <th>Skor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rani K.</td>
                    <td>Jakarta Selatan</td>
                    <td>8</td>
                    <td>6</td>
                    <td><span class="badge bg-success">9.1</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Bayu S.</td>
                    <td>Bandung</td>
                    <td>7</td>
                    <td>5</td>
                    <td><span class="badge bg-success">8.9</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Amelia R.</td>
                    <td>Bekasi</td>
                    <td>9</td>
                    <td>7</td>
                    <td><span class="badge bg-success">9.3</span></td>
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
        $('#table-sales-list').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush