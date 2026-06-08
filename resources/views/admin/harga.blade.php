@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Harga Mobil</h1>
        <p class="page-description mb-0">Update daftar harga, promo harga, dan varian mobil Toyota secara langsung.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-plus me-2"></i>Tambah Harga Baru</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari daftar harga...">
            </div>
        </div>
        <div class="col-md-4 text-md-end">
            <button class="btn btn-outline-primary">Refresh</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-harga">
            <thead class="table-light">
                <tr>
                    <th>Mobil</th>
                    <th>Varian</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Last Update</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NEW AGYA</td>
                    <td>1.2 G MT GR SPORT</td>
                    <td>Rp 172.305.000</td>
                    <td><span class="badge bg-success">Aktif</span></td>
                    <td>05 Jun 2026</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>NEW RUSH</td>
                    <td>1.5 GR SPORT CVT LUX</td>
                    <td>Rp 349.300.000</td>
                    <td><span class="badge bg-warning text-dark">Review</span></td>
                    <td>02 Jun 2026</td>
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
        $('#table-harga').DataTable({
            responsive: true,
            pageLength: 8,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush