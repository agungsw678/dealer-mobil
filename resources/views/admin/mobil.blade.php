@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Mobil</h1>
        <p class="page-description mb-0">Atur daftar unit Toyota, galeri gambar, harga, dan deskripsi fitur mobil.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-plus me-2"></i>Tambah Mobil Baru</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari unit mobil...">
            </div>
        </div>
        <div class="col-md-3">
            <select class="form-select">
                <option selected>Semua Tipe</option>
                <option value="1">SUV</option>
                <option value="2">MPV</option>
                <option value="3">LMPV</option>
            </select>
        </div>
        <div class="col-md-3 text-md-end">
            <button class="btn btn-outline-primary">Filter</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-striped align-middle" id="table-mobil">
            <thead class="table-light">
                <tr>
                    <th>Unit</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NEW AGYA</td>
                    <td>Hatchback</td>
                    <td>Rp 166.250.000</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>18</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>NEW AVANZA</td>
                    <td>MPV</td>
                    <td>Rp 247.791.000</td>
                    <td><span class="badge bg-success">Tersedia</span></td>
                    <td>10</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>NEW FORTUNER</td>
                    <td>SUV</td>
                    <td>Rp 500.000.000</td>
                    <td><span class="badge bg-warning text-dark">Segera</span></td>
                    <td>6</td>
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
        $('#table-mobil').DataTable({
            responsive: true,
            pageLength: 8,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush
