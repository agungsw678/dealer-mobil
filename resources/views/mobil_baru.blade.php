@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        {{-- KONTEN UTAMA --}}
        <div class="col-lg-9">

            {{-- MOBIL BARU TOYOTA --}}
            <div class="card shadow-sm" style="border-radius:14px; background:#ffffff;">
                <div class="card-body" style="padding:26px 28px;">

                    <h3 style="font-weight:700; color:#333; font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            MOBIL BARU TOYOTA 2026
                        </span>
                    </h3>

                    <p style="font-size:.9rem; color:#555; margin-bottom:20px; padding-left:4px;">
                        Model Tipe Terbaru Mobil Toyota 2026 yang Tersedia di Dealer Resmi Toyota Surabaya, Sidoarjo, Gresik, Mojokerto, Kediri, Malang Jawa Timur
                    </p>

                    <div class="row g-3">

                        {{-- NEW Calya --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/calya.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW CALYA</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.calya') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW AVANZA --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/avanza.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW AVANZA</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.avanza') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW FORTUNER --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/fortuner.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW FORTUNER</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.fortuner') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW RAIZE --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/raize1.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW RAIZE</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.raize') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW RUSH --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/rush.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW RUSH</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.rush') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW VOXY --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/voxy.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW VOXY</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.voxy') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW YARIZ --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/yariz.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW YARIZ</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.yariz') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                        {{-- NEW CALYA --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/New Veloz.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW VELOZ</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.veloz') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>
                        
                        {{-- NEW SIENTA --}}
                        <div class="col-md-4 mb-4">
                            <div class="text-center">
                                <img src="{{ asset('images/sienta.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW SIENTA</h5>
                            <ul class="toyota-list">
                                <li class="link">
                                    <a href="{{ route('mobil.sienta') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{-- Kolom Kanan (Sidebar Hubungi Kami) - TIDAK DIUBAH dari code asli --}}
        <div class="col-lg-3">
            <div style="position: sticky; top: 70px; z-index: 1;">
                <div class="text-center" style="background:#1976d2; border-radius:0px 0px 0 0; overflow:hidden;">
                    <div class="py-2" style="font-weight:bold;font-size:1.3rem;color:white;">
                        HUBUNGI KAMI
                    </div>
                    <img src="{{ asset('images/Dealer.jpeg') }}"
                        class="img-fluid"
                        style="width:100%;max-height:270px;object-fit:cover;">
                </div>

                <div style="background:#1976d2;color:white;text-align:center;font-weight:bold; border-radius:0 0 10px 10px;">
                    <div class="py-2" style="font-size:1.2rem;">ALEX BIZER</div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-3">
                        <a href="tel:085607951197" style="color:white; text-decoration:none; font-size:1.3rem;">0856-0795-1197</a>
                    </div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-2" style="font-size:1rem;">WWW.TOYOTASOLO.COM</div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-2" style="font-size:1.1rem; background:#1565c0;">AUTOWIN1000 SOLO</div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- CSS Tambahan --}}
<style>
    .spec-box {
        padding: 28px 30px;
    }

    .spec-text {
        font-size: 1.08rem;
        color: #374151;
        line-height: 1.6;
        margin-bottom: 14px;
    }

    .spec-subtitle {
        font-size: 1.08rem;
        font-weight: 500;
        color: #374151;
        margin-bottom: 6px;
    }

    .spec-list {
        padding-left: 22px;
        font-size: 1.08rem;
        color: #374151;
        margin-bottom: 0;
    }

    .spec-list li {
        margin-bottom: 4px;
    }

    .spec-list .no-dot {
        list-style: none;
        margin-left: -18px;
    }

    .spec-detail {
        display: none;
        margin-top: 10px;
    }

    .toyota-list {
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e5e7eb;
    }

    .spec-arrow {
        display: flex;
        justify-content: center;
        margin-top: 14px;
        cursor: pointer;
    }

    .toyota-card {
        text-align: left;
    }

    .toyota-card img {
        display: block;
        margin: 0 auto 14px;
    }


    .toyota-card img {
        max-width: 100%;
        margin-bottom: 14px;
    }

    .toyota-title {
    font-weight: 700;
    font-size: 14px;
    color: #33ccff;
    margin-bottom: 8px;
    text-align: left;
    width: 100%;
}
    .toyota-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }

    .toyota-list li {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
        font-size: 15px;
        color: #4b545c;
    }

    .toyota-list li::before {
        content: "•";
        color: #33ccff;
        font-size: 22px;
        line-height: 1;
    }

    .toyota-list strong {
        color: #1e3a8a;
        font-weight: 800;
    }

    .toyota-list .link::before {
        content: "•";
    }

    .toyota-list .link a {
        color: #374151;
        font-weight: 500;
        text-decoration: none;
    }

    .toyota-list .link a:hover {
        text-decoration: underline;
    }

    .spec-arrow span {
        width: 18px;
        height: 18px;
        border-right: 3px solid #374151;
        border-bottom: 3px solid #374151;
        transform: rotate(45deg);
    }
</style>
@endsection