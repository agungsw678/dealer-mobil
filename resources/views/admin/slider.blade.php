@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Slider</h1>
        <p class="page-description mb-0">Atur banner hero slider di halaman utama dengan gambar dan CTA yang menarik.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-images me-2"></i>Tambah Slider</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari slider...">
            </div>
        </div>
        <div class="col-md-4 text-md-end">
            <button class="btn btn-outline-primary">Upload Banner</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-slider">
            <thead class="table-light">
                <tr>
                    <th>Judul Slider</th>
                    <th>Gambar</th>
                    <th>Pilihan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Promo Avanza 2026</td>
                    <td><img src="https://via.placeholder.com/120x70.png?text=Slider" alt="slider" class="rounded-3"></td>
                    <td>Halaman Utama</td>
                    <td><span class="badge bg-success">Ditayangkan</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Test Drive Fortuner</td>
                    <td><img src="https://via.placeholder.com/120x70.png?text=Slider" alt="slider" class="rounded-3"></td>
                    <td>Banner Utama</td>
                    <td><span class="badge bg-secondary">Draft</span></td>
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
        $('#table-slider').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush