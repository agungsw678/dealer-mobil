@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Kelola Artikel SEO</h1>
        <p class="page-description mb-0">Buat artikel konten SEO untuk meningkatkan visibilitas website dealer Toyota.</p>
    </div>
    <a href="#" class="btn btn-primary btn-lg"><i class="fas fa-file-alt me-2"></i>Tambah Artikel</a>
</div>

<div class="card topbar-card border-0 mb-4 p-4">
    <div class="row g-3 align-items-center">
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-text bg-white border-end-0"><i class="fas fa-search"></i></span>
                <input type="search" class="form-control border-start-0" placeholder="Cari artikel...">
            </div>
        </div>
        <div class="col-md-6 text-md-end">
            <button class="btn btn-outline-primary">Publikasi Baru</button>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle" id="table-artikel">
            <thead class="table-light">
                <tr>
                    <th>Judul Artikel</th>
                    <th>Slug</th>
                    <th>Kategori</th>
                    <th>Status SEO</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kelebihan Toyota Corolla Cross 2026</td>
                    <td>kelebihan-toyota-corolla-cross-2026</td>
                    <td>Review</td>
                    <td><span class="badge bg-success">Teroptimasi</span></td>
                    <td>28 Mei 2026</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="fas fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Tips Kredit Toyota Avanza</td>
                    <td>tips-kredit-toyota-avanza</td>
                    <td>Finance</td>
                    <td><span class="badge bg-warning text-dark">Perlu Update</span></td>
                    <td>15 Mei 2026</td>
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
        $('#table-artikel').DataTable({
            responsive: true,
            pageLength: 7,
            dom: 'ftip',
            language: { search: "Cari:", lengthMenu: "Tampilkan _MENU_ entri", info: "Menampilkan _START_ sampai _END_ dari _TOTAL_" }
        });
    });
</script>
@endpush