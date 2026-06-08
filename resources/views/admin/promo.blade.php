@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Promo</h1>
        <p class="page-description mb-0">Muat promo banner, periode promo, dan detail tawaran khusus.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-tags me-2"></i>Tambah Promo</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari promo...">
            </div>
        </div>
        <div class="col-md-6 text-md-end">
            <button class="btn btn-outline-primary">Tambah Banner</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-striped align-middle" id="table-promo">
            <thead class="table-light">
                <tr>
                    <th>Promo</th>
                    <th>Banner</th>
                    <th>Periode</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Diskon DP New Avanza</td>
                    <td><img src="https://via.placeholder.com/100x60.png?text=Promo" alt="banner" class="rounded-3"></td>
                    <td>1 Jun - 30 Jun 2026</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Trade-in Toyota Lama</td>
                    <td><img src="https://via.placeholder.com/100x60.png?text=Promo" alt="banner" class="rounded-3"></td>
                    <td>15 Jun - 15 Jul 2026</td>
                    <td><span class="badge bg-warning text-dark">Review</span></td>
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
        $('#table-promo').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush