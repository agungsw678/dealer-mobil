@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        <div class="col-lg-9">

            {{-- Slider --}}
            <div id="mainSlider" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/promo.png') }}"
                            class="d-block w-100"
                            style="height:auto; width:100%;">
                    </div>
                </div>
            </div>

            {{-- PROMO LIST --}}
            <div class="mt-4 p-3 bg-white shadow-sm rounded">

                <h4 class="fw-bold mb-2" style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                    PROMO TOYOTA SOLO
                </h4>

                <p class="text-muted">
                    Informasi Program Promo Maret 2026 Pembelian Mobil Baru Toyota Showroom Event,
                    Paket Kredit, Cashback Dealer yang berlaku di Solo Raya Jawa Tengah
                </p>

                <div class="row">

                    {{-- ITEM --}}
                    <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                        <div class="toyota-card" style="border:none; padding-bottom:16px;">
                            <div class="text-center">
                                <img src="{{ asset('images/calya.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                            </div>
                            <h5 class="toyota-title">NEW CALYA</h5>
                            <ul class="toyota-list">
                                <li>
                                    <span>Harga mulai</span>
                                    <strong class="price">Rp 173.363.000</strong>
                                </li>
                                <li>
                                    <span>Kredit mulai</span>
                                    <strong class="kredit">38 Jutaan</strong>
                                </li>
                                <li>
                                    <span>Cicilan mulai</span>
                                    <strong class="cicilan">3 Jutaan</strong>
                                </li>
                                <li class="link">
                                    <a href="{{ route('mobil.calya') }}">Lihat Selengkapnya</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/raize1.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW RAIZE</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 230.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">27 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">2 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.raize') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/avanza.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW AVANZA</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 247.791.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">30 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">3 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.avanza') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/innova.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW INNOVA</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 430.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">50 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">7 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.innova') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/venturer.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW VENTURER</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 420.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">45 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">6 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.venturer') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/rush1.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW RUSH</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 285.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">25 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">5 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.rush') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/fortuner1.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW FORTUNER</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 580.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">80 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">13 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.fortuner') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/veloz1.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW VELOZ</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 300.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">30 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">6 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.veloz') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/yariz.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW YARIS</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 350.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">80 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">8 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.yariz') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                    {{-- ITEM --}}
                    <div class="col-md-4 mb-4">
                        <div class="text-center">
                            <img src="{{ asset('images/sienta.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                        </div>
                        <h5 class="toyota-title">NEW SIENTA</h5>
                        <ul class="toyota-list">
                            <li>
                                <span>Harga mulai</span>
                                <strong class="price">Rp 325.000.000</strong>
                            </li>
                            <li>
                                <span>Kredit mulai</span>
                                <strong class="kredit">45 Jutaan</strong>
                            </li>
                            <li>
                                <span>Cicilan mulai</span>
                                <strong class="cicilan">7 Jutaan</strong>
                            </li>
                            <li class="link">
                                <a href="{{ route('mobil.sienta') }}">Lihat Selengkapnya</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            {{-- Bagian Video Blog --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:10px;">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px; font-size:18px;">BLOG VIDEO TOYOTA SOLO</span>
                </h3>
                <p style="font-size:18px; color:#555;">
                    Video Review yang akan Membantu & Memudahkan Anda dalam Pembelian Mobil Baru Toyota
                </p>

                <div class="row mt-2">
                    @php
                    $videos = [
                    ['id' => '1axP9frtaDo', 'title' => 'Test Drive Toyota Raize Review by LugNutz Auto Junkie'],
                    ['id' => 'fiFmmqezxaA', 'title' => 'Test Drive Toyota Venturer Diesel Review by GridOto'],
                    ['id' => 'Z1SDoLSwsps', 'title' => 'Review Toyota Raize by Carmudi'],
                    ['id' => 'q1DZf5K9TWY', 'title' => 'Test Drive Toyota New Innova Facelift Review by Carmudi'],
                    ['id' => 'e4ZLQ23zG_U', 'title' => 'Toyota New Venturer Facelift'],
                    ['id' => '-yi0z_mBDN8', 'title' => 'Alasan Toyota New Calya Bisa Sangat Laku Review by Carmudi'],
                    ];
                    @endphp

                    @foreach($videos as $video)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('video.detail', $video['id']) }}" style="text-decoration:none;">
                            <div class="video-thumb shadow-sm">
                                <img src="https://img.youtube.com/vi/{{ $video['id'] }}/maxresdefault.jpg" class="img-fluid">
                                <div class="play-btn-overlay">
                                    <div class="play-icon">▶</div>
                                </div>
                            </div>
                            <h5 class="video-title">{{ $video['title'] }}</h5>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        {{-- Kolom Kanan (Sidebar Hubungi Kami) --}}
        <div class="col-lg-3">
            <div style="position: sticky; top: 70px; z-index: 1;">
                <div class="text-center" style="background:#1976d2; border-radius:0px 0px 0 0; overflow:hidden;">
                    <div class="py-1" style="font-weight:bold;font-size:1.3rem;color:white;">
                        HUBUNGI KAMI
                    </div>
                    <img src="{{ asset('images/Dealer.jpeg') }}"
                        class="img-fluid"
                        style="width:100%;max-height:270px;object-fit:cover;">
                </div>

                <div style="background:#1976d2;color:white;text-align:center;font-weight:bold; border-radius:0 0 10px 10px;">
                    <div class="py-2" style="font-size:1.2rem;">VINCENT ALEXANDER</div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-2">
                        <a href="tel:085607951197" style="color:white; text-decoration:none; font-size:1.3rem;">0856-0795-1197</a>
                    </div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-2" style="font-size:1rem;">WWW.TOYOTASOLO.COM</div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-2" style="font-size:1.1rem; background:#1565c0;">TOYOTASOLO2000</div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- CSS Tambahan --}}
<style>
    /* ===== TOYOTA CARD ===== */
    .toyota-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .toyota-card img {
        display: block;
        margin: 0 auto 14px;
        max-width: 100%;
        max-height: 220px;
        object-fit: contain;
    }

    .toyota-title {
        font-weight: 800;
        font-size: 20px;
        color: #33ccff;
        margin-bottom: 12px;
    }

    .toyota-list {
        list-style: none;
        padding: 0;
        margin: 0;
        margin-top: auto;
        padding-bottom: 5px;
    }

    .toyota-list li {
        display: flex;
        align-items: center;
        gap: 6px;
        /* dari 10px → 6px */
        margin-bottom: 4px;
        /* dari 8px → 4px */
        font-size: 14px;
        /* sedikit diperkecil */
        line-height: 1.3;
        /* bikin lebih rapat */
    }

    .toyota-list li::before {
        content: "•";
        color: #000;
        font-size: 22px;
    }

    .toyota-list strong {
        color: #1e3a8a;
        font-weight: 800;
    }

    .toyota-list .link a {
        color: #374151;
        font-weight: 500;
        text-decoration: none;
    }

    .toyota-list .link a:hover {
        text-decoration: underline;
    }

    /* ===== GALERI ===== */
    .warna-scroll {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 10px;
        scroll-behavior: smooth;
    }

    .warna-scroll::-webkit-scrollbar {
        height: 6px;
    }

    .warna-scroll::-webkit-scrollbar-thumb {
        background: #cfcfcf;
    }

    .warna-card {
        min-width: 200px;
        background: white;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        flex-shrink: 0;
        text-align: center;
        cursor: pointer;
    }

    .warna-card img {
        width: 100%;
        height: 130px;
        object-fit: cover;
        transition: 0.3s;
    }

    .warna-card img:hover {
        transform: scale(1.05);
    }

    .warna-label {
        background: #6b7280;
        color: white;
        text-align: center;
        padding: 6px;
        font-weight: 600;
        font-size: .8rem;
    }

    /* ===== LIGHTBOX ===== */
    .lightbox {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.92);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .lightbox-img {
        max-width: 90%;
        max-height: 80%;
    }

    .lightbox-caption {
        color: #fff;
        margin-top: 12px;
        font-size: 15px;
    }

    .lightbox-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 36px;
        color: #fff;
        cursor: pointer;
    }

    .lightbox-prev,
    .lightbox-next {
        position: absolute;
        top: 50%;
        font-size: 40px;
        color: #fff;
        cursor: pointer;
        padding: 10px;
        user-select: none;
    }

    .lightbox-prev {
        left: 30px;
    }

    .lightbox-next {
        right: 30px;
    }

    .video-thumb {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 9;
        overflow: hidden;
        background: #000;
        border-radius: 0 !important;
    }

    .video-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .play-btn-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .play-icon {
        width: 50px;
        height: 50px;
        border: 4px solid #33ccff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 24px;
        background: rgba(51, 204, 255, 0.2);
        backdrop-filter: blur(2px);
        transition: 0.3s ease;
    }

    .video-thumb:hover .play-icon {
        transform: scale(1.1);
        background: #33ccff;
        box-shadow: 0 0 15px rgba(51, 204, 255, 0.5);
    }

    .video-title {
        font-size: 0.95rem;
        font-weight: 600;
        color: #333;
        margin-top: 10px;
        line-height: 1.4;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Logic Toggle Deskripsi
        const arrow = document.getElementById("arrowSpec");
        const desc = document.getElementById("detailDeskripsi");

        if (arrow && desc) {
            arrow.addEventListener("click", function() {
                if (desc.style.display === "none" || desc.style.display === "") {
                    desc.style.display = "block";
                    arrow.style.transform = "rotate(225deg)"; // Panah hadap atas
                } else {
                    desc.style.display = "none";
                    arrow.style.transform = "rotate(45deg)"; // Panah hadap bawah
                }
            });
        }

        // Logic Ganti Video Utama
        const mainVideo = document.getElementById("mainVideo");
        const videoItems = document.querySelectorAll(".video-item");

        videoItems.forEach(item => {
            item.addEventListener("click", function() {
                const videoId = this.getAttribute("data-id");
                mainVideo.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;

                // Scroll ke arah video utama agar user melihat perubahannya
                mainVideo.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        document.querySelectorAll(".arrow-btn").forEach(function(arrow) {

            arrow.addEventListener("click", function() {

                const targetId = arrow.getAttribute("data-target");
                const desc = document.getElementById(targetId);

                if (!desc) return;

                desc.style.display = "block"; // tampilkan deskripsi
                arrow.style.display = "none"; // panah hilang permanen

            });

        });

    });
</script>
<script>
    const images = document.querySelectorAll('.open-lightbox');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.querySelector('.lightbox-img');
    const caption = document.querySelector('.lightbox-caption');
    let currentIndex = 0;

    images.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            showLightbox();
        });
    });

    function showLightbox() {
        lightbox.style.display = 'flex';
        lightboxImg.src = images[currentIndex].dataset.full;
        caption.innerText = images[currentIndex].dataset.caption;
    }

    document.querySelector('.lightbox-close').onclick = () => {
        lightbox.style.display = 'none';
    };

    document.querySelector('.lightbox-next').onclick = () => {
        currentIndex = (currentIndex + 1) % images.length;
        showLightbox();
    };

    document.querySelector('.lightbox-prev').onclick = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showLightbox();
    };

    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });
</script>

@endsection