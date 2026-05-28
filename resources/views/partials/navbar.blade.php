{{-- Topbar: hanya tampil di desktop --}}
<div class="topbar d-none d-lg-block">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <span class="fw-semibold">
            HUBUNGI VINCENT ALEXANDER
            <span class="text-info">0856-0795-1197</span>
        </span>
        <div class="d-flex align-items-center">
            <a href="{{ route('daftar.harga') }}" class="top-link">DAFTAR HARGA</a>
            <a href="{{ route('mobil.baru') }}" class="top-link">MOBIL BARU</a>
            <a href="{{ route('video') }}" class="top-link">VIDEO</a>

            @if (request()->is('admin/login'))
            @elseif (session('admin_logged_in'))
            <a href="/admin/logout" class="btn btn-danger btn-sm ms-3">Logout</a>
            @else
            <a href="/logout" class="btn btn-warning btn-sm ms-3">Logout</a>
            @endif
        </div>
    </div>
</div>

{{-- Navbar desktop: hanya tampil di desktop --}}
<nav class="navbar-desktop d-none d-lg-flex sticky-top">
    <a href="{{ route('home') }}" class="navbar-logo-left">
        <img src="{{ asset('images/logo-dealer.png') }}" height="36" alt="Toyota">
    </a>
    <a href="{{ route('mobil.raize') }}" class="menu-item">NEW RAIZE</a>
    <a href="{{ route('mobil.chr') }}" class="menu-item">C-HR</a>
    <a href="{{ route('mobil.corollacross') }}" class="menu-item">COROLLA CROSS</a>
    <a href="{{ route('mobil.caldina') }}" class="menu-item">CALDINA</a>
    <a href="{{ route('promo') }}" class="menu-item">PROMO</a>
</nav>

{{-- Mobile navbar --}}
<div class="mobile-navbar d-flex d-lg-none sticky-top">
    <a href="{{ route('home') }}" class="mobile-nav-item">
        <img src="{{ asset('images/logo-dealer.png') }}" width="28" height="28" alt="Toyota">
        <span>TOYOTA</span>
    </a>

    <a href="tel:085607951197" class="mobile-nav-item">
        <img src="{{ asset('images/telepon.png') }}" width="25" height="25" alt="Telepon">
        <span>TELEPON</span>
    </a>

    <a href="https://wa.me/6288803318324" target="_blank" class="mobile-nav-item">
        <img src="{{ asset('images/whatsapp.png') }}" width="25" height="25" alt="WhatsApp">
        <span>WHATSAPP</span>
    </a>

    <button class="mobile-nav-item" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
        <img src="{{ asset('images/lainnya.png') }}" width="25" height="25" alt="Lainnya">
        <span>LAINNYA</span>
    </button>
</div>

<style>
    html,
    body {
        overflow-x: hidden;
    }

    /* TOP BAR */
    .topbar {
        background: #212529;
        color: white;
        font-size: 0.85rem;
        padding: 6px 0;
        position: relative;
        z-index: 1060;
    }

    .top-link {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-weight: 600;
        position: relative;
    }

    .top-link::after {
        content: '';
        position: absolute;
        right: -10px;
        top: 50%;
        transform: translateY(-50%);
        height: 14px;
        width: 1px;
        background: rgba(255, 255, 255, 0.3);
    }

    .top-link:last-child::after {
        display: none;
    }

    .top-link:hover {
        color: #0dcaf0;
    }

    /* NAVBAR DESKTOP */
    .navbar-desktop {
        background-color: #0d6efd;
        height: 42px;
        align-items: stretch;
        padding-left: 50px;

        position: sticky;
        top: 0;
        z-index: 1055;

        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar-logo-left {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-right: 3px solid rgba(255, 255, 255, 0.5);
        flex-shrink: 0;
    }

    .menu-item {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 22px;
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.88rem;
        letter-spacing: 0.5px;
        border-right: 3px solid rgba(255, 255, 255, 0.5);
        transition: background 0.2s;
        white-space: nowrap;
    }

    .menu-item:hover {
        background: rgba(0, 0, 0, 0.15);
        color: white;
    }

    /* MOBILE NAVBAR */
    .mobile-navbar {
        background: #d93a4a;
        height: 56px;

        position: sticky;
        top: 0;
        z-index: 1055;

        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .mobile-nav-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 3px;
        color: white;
        text-decoration: none;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 0.5px;
        border: none;
        background: none;
        border-right: 1px solid rgba(255, 255, 255, 0.25);
        cursor: pointer;
        transition: background 0.2s;
    }

    .mobile-nav-item:last-child {
        border-right: none;
    }

    .mobile-nav-item:hover,
    .mobile-nav-item:active {
        background: rgba(0, 0, 0, 0.15);
        color: white;
    }

    .menu-list-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 32px;
        color: #d93a4a;
        text-decoration: none;
        font-size: 1.25rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #232020;
        transition: background 0.2s;
    }

    .menu-list-item:hover,
    .menu-list-item:active {
        background: #fff5f6;
        color: #d93a4a;
    }

    .menu-list-item i {
        font-size: 1.6rem;
        color: #d93a4a;
        flex-shrink: 0;
        -webkit-text-stroke: 1px #d93a4a;
    }

    .icon-img {
        width: 26px;
        height: 26px;
        object-fit: contain;
    }
</style>