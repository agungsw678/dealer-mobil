@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Video Review</h1>
        <p class="page-description mb-0">Unggah link video review, judul, dan deskripsi untuk konten showroom Toyota.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-video me-2"></i>Tambah Video</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari video review...">
            </div>
        </div>
        <div class="col-md-6 text-md-end">
            <button class="btn btn-outline-primary">Sinkronisasi</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-video-review">
            <thead class="table-light">
                <tr>
                    <th>Judul Video</th>
                    <th>Preview</th>
                    <th>Kategori</th>
                    <th>Durasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Review New Veloz</td>
                    <td><span class="badge bg-secondary">YouTube</span></td>
                    <td>Review</td>
                    <td>9:42</td>
                    <td><span class="badge bg-success">Tayang</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Fitur Keselamatan Corolla Cross</td>
                    <td><span class="badge bg-secondary">YouTube</span></td>
                    <td>Fitur</td>
                    <td>7:15</td>
                    <td><span class="badge bg-success">Tayang</span></td>
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
        $('#table-video-review').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush