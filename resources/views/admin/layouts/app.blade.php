<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dealer Toyota</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --toyota-red: #c4002b;
            --toyota-blue: #005b9f;
            --surface: #ffffff;
            --surface-soft: #f4f6fb;
            --text-strong: #172033;
            --text-muted: #5f6a78;
        }
        body {
            background: var(--surface-soft);
            color: var(--text-strong);
            font-family: 'Roboto', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        .navbar {
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
            background: var(--surface);
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.02em;
        }
        .navbar-nav .nav-link {
            color: var(--text-muted) !important;
            font-weight: 600;
            margin-right: 0.5rem;
            border-radius: 0.75rem;
            transition: all 0.2s ease;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:hover {
            color: var(--toyota-red) !important;
            background: rgba(196, 0, 43, 0.08);
        }
        .btn-primary {
            background: var(--toyota-red);
            border-color: var(--toyota-red);
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background: var(--toyota-blue);
            border-color: var(--toyota-blue);
        }
        .form-control:focus {
            border-color: rgba(0, 91, 159, 0.35);
            box-shadow: 0 0 0 0.2rem rgba(0, 91, 159, 0.1);
        }
        .topbar-card,
        .card-panel {
            border-radius: 22px;
            background: var(--surface);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
        }
        .status-pill {
            border-radius: 999px;
            font-size: 0.78rem;
            letter-spacing: 0.02em;
            padding: 0.55rem 0.85rem;
            display: inline-flex;
            align-items: center;
        }
        .status-active { background: #d3f7ef; color: #0f6f5b; }
        .status-draft { background: #f8f1f1; color: #9b1d22; }
        .status-pending { background: #fff4db; color: #8a5f16; }
        .table thead th {
            border-bottom: 2px solid rgba(0, 0, 0, 0.08);
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-light sticky-top shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('admin.dashboard') }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.png" width="34" height="34" alt="Toyota">
                <div>
                    <div style="font-size:0.95rem;">Dealer Toyota</div>
                    <span class="text-muted small">Admin Panel</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav" aria-controls="adminNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="adminNav">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/mobil*') ? 'active' : '' }}" href="{{ route('admin.mobil') }}">Data Mobil</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/slider*') ? 'active' : '' }}" href="{{ route('admin.slider') }}">Banner</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/promo*') ? 'active' : '' }}" href="{{ route('admin.promo') }}">Promo</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/video-review*') ? 'active' : '' }}" href="{{ route('admin.video.review') }}">Video Review</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/sales*') ? 'active' : '' }}" href="{{ route('admin.sales') }}">Kontak Sales</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->is('admin/pengaturan*') ? 'active' : '' }}" href="{{ route('admin.pengaturan') }}">Pengaturan Website</a></li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    <span class="text-muted small d-none d-xl-inline">Halo, {{ auth()->user()?->name ?? 'Admin Toyota' }}</span>
                    <a href="{{ route('admin.logout') }}" class="btn btn-outline-primary btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container-fluid px-4 py-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-4 shadow-sm" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show rounded-4 shadow-sm" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    @stack('scripts')
</body>
</html>
