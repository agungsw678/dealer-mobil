@extends('admin.layouts.app')

@section('content')
<div class="row align-items-center mb-4">
    <div class="col-lg-8">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
            <div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="badge bg-danger rounded-pill px-3 py-2">Admin Dashboard</span>
                </div>
                <h1 class="page-title mb-1">Selamat datang, Admin Toyota</h1>
                <p class="page-description mb-0">Pantau performa penjualan, leads, promo, dan konten dealer dengan dasbor modern yang responsif.</p>
            </div>
            <a href="{{ route('admin.promo') }}" class="btn btn-danger btn-lg shadow-sm px-4"><i class="fas fa-plus me-2"></i> Tambah Promo Baru</a>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <p class="text-uppercase text-muted mb-1 small">Total Mobil</p>
                    <h3 class="mb-0">142</h3>
                </div>
                <div class="badge bg-danger text-white rounded-circle p-3 shadow-sm">
                    <i class="fas fa-car fa-lg"></i>
                </div>
            </div>
            <small class="text-muted">Stok unit Toyota siap ditampilkan di website.</small>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <p class="text-uppercase text-muted mb-1 small">Total Leads</p>
                    <h3 class="mb-0">87</h3>
                </div>
                <div class="badge bg-warning text-dark rounded-circle p-3 shadow-sm">
                    <i class="fas fa-user-plus fa-lg"></i>
                </div>
            </div>
            <small class="text-muted">Prospek terbaru masuk dari website dan kampanye.</small>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <p class="text-uppercase text-muted mb-1 small">Promo Aktif</p>
                    <h3 class="mb-0">6</h3>
                </div>
                <div class="badge bg-success text-white rounded-circle p-3 shadow-sm">
                    <i class="fas fa-tag fa-lg"></i>
                </div>
            </div>
            <small class="text-muted">Kampanye promo mobil aktif di tampilan depan.</small>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card topbar-card p-4 h-100 border-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <p class="text-uppercase text-muted mb-1 small">Total Video</p>
                    <h3 class="mb-0">24</h3>
                </div>
                <div class="badge bg-info text-white rounded-circle p-3 shadow-sm">
                    <i class="fas fa-play fa-lg"></i>
                </div>
            </div>
            <small class="text-muted">Review video dan konten showroom terbaru.</small>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-xl-8">
        <div class="card card-hero border-0 overflow-hidden">
            <div class="card-body p-4 p-md-5">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold">Tren Leads Bulanan</h2>
                        <p class="text-muted mb-4">Analitik leads terbaru membantu admin menentukan strategi follow-up yang lebih cepat.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <span class="badge bg-white text-danger">+18% dari bulan lalu</span>
                            <span class="badge bg-white text-muted">97% respon cepat</span>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <img src="https://images.unsplash.com/photo-1525609004556-c46c7d6cf023?auto=format&fit=crop&w=400&q=80" class="rounded-4 shadow-sm" alt="Toyota Leads" style="max-width:180px;">
                    </div>
                </div>
                <div class="mt-4">
                    <canvas id="leadsChart" height="160"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card topbar-card border-0 h-100 p-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <h5 class="mb-1">Performa Lead</h5>
                    <p class="text-muted mb-0">Ringkasan interaksi dan follow-up tim sales.</p>
                </div>
                <span class="badge bg-danger">Realtime</span>
            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">Phone</span>
                    <strong>42%</strong>
                </div>
                <div class="progress rounded-pill mb-4" style="height: 10px;"><div class="progress-bar bg-danger" role="progressbar" style="width: 42%;"></div></div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">Email</span>
                    <strong>30%</strong>
                </div>
                <div class="progress rounded-pill mb-4" style="height: 10px;"><div class="progress-bar bg-warning" role="progressbar" style="width: 30%;"></div></div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="text-muted">Chat</span>
                    <strong>28%</strong>
                </div>
                <div class="progress rounded-pill mb-3" style="height: 10px;"><div class="progress-bar bg-info" role="progressbar" style="width: 28%;"></div></div>
            </div>
        </div>
    </div>
</div>

<div class="card topbar-card border-0">
    <div class="card-body">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between mb-4">
            <div>
                <h5 class="mb-1">Leads Terbaru</h5>
                <p class="text-muted mb-0">Kembangkan follow-up dengan data kontak dan status lead terkini.</p>
            </div>
            <a href="{{ route('admin.leads') }}" class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-right me-2"></i>Lihat Semua Leads</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle" id="table-leads-dashboard">
                <thead class="table-light">
                    <tr>
                        <th>Nama</th>
                        <th>Mobil Minat</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th>Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Agus Pratama</td>
                        <td>Corolla Cross</td>
                        <td>0812-3456-7890</td>
                        <td><span class="badge bg-success">Follow Up</span></td>
                        <td>4 Jun 2026</td>
                        <td>Rani</td>
                    </tr>
                    <tr>
                        <td>Siti Nurhaliza</td>
                        <td>Veloz</td>
                        <td>0822-9876-5432</td>
                        <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                        <td>3 Jun 2026</td>
                        <td>Bayu</td>
                    </tr>
                    <tr>
                        <td>Hendra Wijaya</td>
                        <td>Fortuner</td>
                        <td>0813-1122-3344</td>
                        <td><span class="badge bg-danger">Baru</span></td>
                        <td>2 Jun 2026</td>
                        <td>Amelia</td>
                    </tr>
                    <tr>
                        <td>Rika Aulia</td>
                        <td>Rush</td>
                        <td>0857-2233-4455</td>
                        <td><span class="badge bg-success">Test Drive</span></td>
                        <td>1 Jun 2026</td>
                        <td>Fauzan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const ctx = document.getElementById('leadsChart');
    if (ctx) {
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Leads',
                    data: [24, 31, 28, 45, 33, 40, 38, 47, 49, 55, 62, 70],
                    borderColor: 'rgba(196, 0, 43, 0.92)',
                    backgroundColor: 'rgba(196, 0, 43, 0.12)',
                    fill: true,
                    tension: 0.35,
                    pointRadius: 4,
                    pointBackgroundColor: 'rgba(196, 0, 43, 0.92)',
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                },
                scales: {
                    x: { grid: { display: false } },
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(0,0,0,0.05)' }
                    }
                }
            }
        });
    }
    $(document).ready(function() {
        $('#table-leads-dashboard').DataTable({
            responsive: true,
            paging: false,
            searching: false,
            info: false,
            ordering: false,
            language: { emptyTable: 'Tidak ada data leads terbaru.' }
        });
    });
</script>
@endpush