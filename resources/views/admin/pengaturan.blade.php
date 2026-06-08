@extends('admin.layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="page-title mb-1">Pengaturan Dealer</h1>
        <p class="page-description mb-0">Sunting informasi perusahaan, kontak, SEO, dan integrasi formulir kontak.</p>
    </div>
    <button class="btn btn-primary btn-lg"><i class="fas fa-cog me-2"></i>Simpan Pengaturan</button>
</div>

<div class="row g-4">
    <div class="col-lg-6">
        <div class="card topbar-card border-0 p-4">
            <h5 class="mb-3">Informasi Dealer</h5>
            <div class="mb-3">
                <label class="form-label">Nama Dealer</label>
                <input type="text" class="form-control" value="Toyota Dealer Utama">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" rows="3">Jl. Raya Toyota No. 1, Jakarta Selatan</textarea>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Telepon</label>
                    <input type="text" class="form-control" value="(021) 1234 5678">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="info@toyotadealer.co.id">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card topbar-card border-0 p-4">
            <h5 class="mb-3">Pengaturan SEO & Kontak</h5>
            <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input type="text" class="form-control" value="Dealer Toyota Resmi - Promo, Harga & Test Drive">
            </div>
            <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea class="form-control" rows="3">Dealer resmi Toyota menyediakan promo terbaik, daftar harga terbaru, test drive, dan layanan after-sales terpercaya.</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Layanan</label>
                <input type="text" class="form-control" value="0812-3456-7890">
            </div>
        </div>
    </div>
</div>

<div class="card topbar-card border-0 mt-4 p-4">
    <h5 class="mb-3">Integrasi Kontak & Formulir</h5>
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">WhatsApp API</label>
            <input type="text" class="form-control" value="https://wa.me/6281234567890">
        </div>
        <div class="col-md-4">
            <label class="form-label">Google Maps Embed</label>
            <input type="text" class="form-control" value="https://maps.google.com/...">
        </div>
        <div class="col-md-4">
            <label class="form-label">Jam Operasional</label>
            <input type="text" class="form-control" value="Senin - Sabtu 08:00 - 17:00">
        </div>
    </div>
</div>
@endsection