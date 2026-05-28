@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        <div class="col-lg-9">

            {{-- Slider --}}
            <div id="mainSlider" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/Raize.png') }}"
                            class="d-block w-100"
                            style="height:auto; width:100%;">
                    </div>
                </div>
            </div>

            {{-- DETAIL PRODUK --}}
            <div class="card border-0 b rounded-0"
                style="margin-top:-6px; background:#f1f1f1; border-top:4px solid #33ccff;">

                <div class="card-body" style="padding:25px 30px;">

                    <h3 style="font-weight:700; color:#333333; font-size:23px; margin-bottom:10px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            TOYOTA RAIZE SOLO
                        </span>
                    </h3>

                    {{-- SUBTITLE --}}
                    <p style="font-size:.95rem; color:#444; line-height:1.5; margin-bottom:4px;">
                        Informasi Pembelian, Test Drive, Simulasi Kredit Mobil Baru
                        Toyota Raize & New Venturer 2026 Solo
                        Raya Jawa Tengah.<br>
                        Beli Sekarang Disini Dapatkan Promonya Dibawah Ini
                    </p>

                    <hr style="margin:2px 0 4px 0; opacity:.25;">

                    {{-- LIST --}}
                    @php
                    $items = [
                    ['Harga mulai', 'Rp 380.585.000'],
                    ['Kredit mulai', 'Rp 78 Jutaan'],
                    ['Cicilan mulai', 'Rp 5 Jutaan'],
                    ['Tenor hingga', '5 Tahun'],
                    ];
                    @endphp

                    @foreach($items as $item)
                    <div style="display:flex; align-items:center; padding:5px 0;">

                        <div style="flex:0 0 30%;">
                            <span style="color:black; font-size:10px;">●</span>
                            <span style="margin-left:6px; font-size:.9rem; color:#333;">
                                {{ $item[0] }}
                            </span>
                        </div>

                        <div style="flex:0 0 45%; text-align:left;">
                            <span style="color:#1a237e; font-weight:700; font-size:1rem;">
                                {{ $item[1] }}
                            </span>
                        </div>

                    </div>

                    <hr style="margin:3px 0; opacity:.25;">
                    @endforeach

                    {{-- BONUS --}}
                    <div style="padding:6px 0;">
                        <span style="color:black; font-weight:700; font-size:.9rem;">
                            Bonus & Paket Aksesoris
                        </span>

                        <div style="color:#1a237e; font-size:.95rem; margin-top:4px;">
                            Anti Karat, Car Care Protera, Kaca Film, Karpet Dasar, Paket Servis
                        </div>
                    </div>

                    <hr style="margin:6px 0; opacity:.2;">

                    {{-- DESKRIPSI --}}
                    <div id="detailDeskripsi" style="display:none;">
                        <p style="font-size:.9rem; color:#555; line-height:1.5;">
                            Menerima Pembelian Secara Tunai atau Kredit dengan Berbagai Pilihan Leasing dan Finance.
                            Juga Menerima Tukar Tambah Segala Merk.
                            Diproses Cepat mulai 1 Hari Kerja, Persyaratan Mudah.
                            Syarat dan Ketentuan berlaku di wilayah Solo, Boyolali, Sukoharjo, Karanganyar, Wonogiri, Sragen, Jawa Tengah
                        </p>
                    </div>

                    {{-- PANAH --}}
                    <div class="text-center mt-3">
                        <div class="chevron-down arrow-btn" data-target="detailDeskripsi"></div>
                    </div>
                </div>
            </div>

            <div style="margin-top:15px; background:#ffffff; border-radius:12px; padding:24px; border:1px solid #eee;">

                <h2 style="font-size:20px; font-weight:700; margin-bottom:5px; color:#1f2937;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                        DAFTAR HARGA NEW RAIZE
                    </span>
                </h2>
                <table style="width:100%; border-collapse:collapse; margin-bottom:15px;">
                    <thead>
                        <tr>
                            <th style="background:#6f777f; color:#ffffff; font-weight:700; padding:6px 12px; font-size:14px; border-right:1px solid #ffffff;">
                                TIPE
                            </th>
                            <th style="background:#6f777f; color:#ffffff; font-weight:700; padding:6px 12px; font-size:14px;">
                                HARGA
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" style="font-weight:700; background:#fafafa; padding:10px 12px; border-bottom:1px solid #e5e7eb;">
                                NEW RAIZE
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.2 G MT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 257.033.000
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.2 G CVT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 273.000.000
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.0 T G MT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 269.900.000
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.0 T G CVT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 284.500.000
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.0 T GR Sport MT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 286.700.000
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                1.0 T GR Sport CVT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 301.900.000
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p style="font-size:14px; line-height:1.6; color:#6b7280; margin:0;">
                    Informasi daftar harga diatas merupakan harga mobil baru Toyota yang sudah OTR
                    ( On The Road ) Belum Dikurangi Cashback yang berlaku di Solo Raya Jawa Tengah pada bulan
                    Februari 2026. Dapat berubah sewaktu-waktu tanpa pemberitahuan.
                </p>
            </div>

            {{-- PILIHAN WARNA --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        PILIHAN WARNA NEW RAIZE
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'12.png','nama'=>'Warna Turquoise Metallic','caption'=>'Warna Turquoise Metallic Solo Raya Jawa Tengah'],
                ['gambar'=>'13.png','nama'=>'Warna Yellow Black Top','caption'=>'Warna Yellow Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'14.png','nama'=>'Warna Red Black Top','caption'=>'Warna Red Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'15.png','nama'=>'Warna White Black Top','caption'=>'Warna White Black Top Solo Raya Jawa Tengah'],
                ];
                @endphp

                <div style="display:flex; gap:12px; overflow-x:auto; padding-top:10px;">

                    @foreach($warna as $w)
                    <div style="min-width:220px;">

                        <!-- CARD PUTIH -->
                        <div style="
                background:white;
                box-shadow:0 2px 6px rgba(0,0,0,0.1);
                overflow:hidden;
            ">

                            <div style="position:relative;">

                                <img
                                    src="{{ asset('images/'.$w['gambar']) }}"
                                    data-full="{{ asset('images/'.$w['gambar']) }}"
                                    data-caption="{{ $w['caption'] }}"
                                    class="open-lightbox"
                                    style="width:100%; display:block; cursor:pointer;">

                                <!-- OVERLAY TEXT -->
                                <div style="
                        position:absolute;
                        bottom:0;
                        width:100%;
                        background:rgba(107,114,128,0.7);
                        color:#fff;
                        font-size:13px;
                        font-weight:600;
                        padding:1px;
                        text-align:center;
                    ">
                                    {{ $w['nama'] }}
                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

            </div>
            <!-- LIGHTBOX -->
            <div id="lightbox" class="lightbox">
                <span class="lightbox-close">&times;</span>
                <span class="lightbox-prev">&#10094;</span>
                <span class="lightbox-next">&#10095;</span>

                <img class="lightbox-img">
                <div class="lightbox-caption"></div>
            </div>
            </body>

            </html>


            {{-- Bagian Video Blog --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:10px;">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                        BLOG VIDEO NEW RAIZE
                    </span>
                </h3>
                <p style="font-size:1.05rem; color:#555;">
                    Tonton Dibawah Ini Video Produk Presentasi atau Review Mobil Baru
                    untuk Melihat Spesifikasi Lengkapnya
                </p>

                {{-- VIDEO UTAMA --}}
                <div class="ratio ratio-16x9 mb-3">
                    <iframe
                        id="mainVideo"
                        {{-- Tambahkan autoplay=1 di sini --}}
                        src="https://www.youtube.com/embed/IqOi_W1bGAk?autoplay=1&mute=1&rel=0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>

                @php
                $videos = [
                ['id'=>'rbwUGGGOLk8','title'=>'Test Drive Toyota New Raize Review by OtoDriver'],
                ];
                @endphp

                <div class="row g-3">
                    @foreach($videos as $video)
                    <div class="col-md-3 col-6">

                        {{-- GAMBAR --}}
                        <div style="position:relative; cursor:pointer;">

                            <img src="https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg"
                                style="width:100%; height:110px; object-fit:cover; display:block;">

                            {{-- OVERLAY --}}
                            <div style="
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.2);
        "></div>

                            {{-- PLAY --}}
                            <div style="
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        ">
                                <svg width="45" height="45" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="40" fill="rgba(255,255,255,0.7)" />
                                    <polygon points="40,30 70,50 40,70" fill="#333" />
                                </svg>
                            </div>

                        </div>

                        {{-- JUDUL (INI YANG DIPINDAH KE BAWAH) --}}
                        <div style="
        margin-top:6px;
        font-size:13px;
        font-weight:600;
        color:#333;
        line-height:1.3;
    ">
                            {{ $video['title'] }}
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>

            <div class="card mt-2 shadow-sm" style="border-radius:14px;background:#ffffff;">
                <div class="card-body spec-box">

                    <h4 style="font-weight:700; color:#333; font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            REVIEW SPESIFIKASI NEW RAIZE
                        </span>
                    </h4>


                    <p class="spec-text">
                        New Toyota Raize merupakan SUV compact 5 penumpang yang cocok untuk penggunaan dalam kota maupun luar kota. Memiliki desain sporty dan modern, serta dilengkapi fitur keselamatan dan teknologi terkini untuk kenyamanan dan keamanan berkendara.
                    </p>

                    <p class="spec-subtitle">
                        Performa Mesin Toyota New Raize:
                    </p>

                    <ul class="spec-list">
                        <li>Pilihan Mesin</li>
                        <li class="no-dot">
                            1. 1.0L Turbo 1KR-VET 3 Cylinders, DOHC, VVT-i
                        </li>
                        <li class="no-dot">
                            2. 1.2L WA-VE 3 Cylinders, DOHC, Dual VVT-i
                        </li>
                    </ul>
                    <!-- DETAIL BAWAH -->
                    <div id="specDetail" class="spec-detail">

                        <!-- EKSTERIOR -->
                        <h6 class="spec-subtitle mt-3">Eksterior Toyota New Raize</h6>
                        <ul class="spec-list">
                            <li>LED Headlamp with DRL</li>
                            <li>Front Grille with Sporty Design</li>
                            <li>LED Fog Lamp</li>
                            <li>Auto Retractable Side Mirror with Turn Signal</li>
                            <li>Rear Spoiler with High Mount Stop Lamp</li>
                            <li>17-inch Alloy Wheel (GR Sport Type)</li>
                            <li>Black Over Fender & Roof Rail</li>
                            <li>Rear Parking Sensor & Back Camera</li>
                        </ul>

                        <!-- DIMENSI -->
                        <h6 class="spec-subtitle mt-3">Dimensi</h6>
                        <ul class="spec-list">
                            <li>Panjang: 4030 mm</li>
                            <li>Lebar: 1710 mm</li>
                            <li>Tinggi: 1635 mm</li>
                            <li>Wheelbase: 2525 mm</li>
                            <li>Ground Clearance: 200 mm</li>
                            <li>Turning Radius: 5.0 m</li>
                            <li>Wheel: 17-inch Alloy Wheel</li>
                        </ul>

                        <!-- INTERIOR -->
                        <h6 class="spec-subtitle mt-3">Interior Toyota New Raize</h6>
                        <ul class="spec-list">
                            <li>9-inch Touchscreen Head Unit</li>
                            <li>Digital Meter Combination Display</li>
                            <li>Push Start/Stop Button</li>
                            <li>Steering Switch Control</li>
                            <li>Auto AC (GR Sport Type)</li>
                            <li>Bluetooth & Smartphone Connectivity</li>
                            <li>USB & Power Outlet</li>
                            <li>Adjustable Steering</li>
                            <li>Fabric & Leather Seat Combination (GR Type)</li>
                        </ul>

                        <!-- KESELAMATAN -->
                        <h6 class="spec-subtitle mt-3">Keselamatan</h6>
                        <ul class="spec-list">
                            <li>Toyota Safety Sense (Pre-Collision System, Lane Departure Alert)</li>
                            <li>Vehicle Stability Control (VSC)</li>
                            <li>Hill Start Assist (HSA)</li>
                            <li>Anti-Lock Braking System (ABS)</li>
                            <li>Electronic Brake-force Distribution (EBD)</li>
                            <li>6 Airbags (GR Sport Type)</li>
                            <li>Rear Parking Camera</li>
                        </ul>

                        <!-- DISCLAIMER -->
                        <p class="spec-disclaimer mt-4">
                            <strong>Disclaimer:</strong> Tidak semua fitur New Toyota Raize ditampilkan dan dijelaskan di sini, untuk informasi lebih lengkap silakan melakukan test drive dengan menghubungi Marketing Toyota di website ini.
                        </p>

                    </div>


                    <div class="text-center mt-3">
                        <div class="chevron-down arrow-btn" data-target="specDetail"></div>
                    </div>


                </div>
            </div>


            {{-- Galeri Delivery --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12px;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        GALERI DELIVERY TOYOTA SOLO
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'gambar1.png'],
                ['gambar'=>'gambar2.png'],
                ['gambar'=>'gambar3.png'],
                ['gambar'=>'gambar4.png'],
                ['gambar'=>'gambar5.png'],

                ];
                @endphp

                <div style="display:flex; gap:10px; overflow-x:auto; padding-top:10px;">

                    @foreach($warna as $w)
                    <div style="min-width:200px; border-radius:0;">
                        <img
                            src="{{ asset('images/'.$w['gambar']) }}"
                            data-full="{{ asset('images/'.$w['gambar']) }}"
                            data-caption="New Comfortable Full Dashboard Eksterior All New Corolla Cross - Solo Raya Jawa Timur"
                            class="open-lightbox"
                            style="width:100%; border-radius:0; cursor:pointer;">
                    </div>
                    @endforeach

                </div>

            </div>
            {{-- MOBIL TOYOTA LAINNYA --}}
            <div class="card mt-2 shadow-sm" style="border-radius:14px; background:#ffffff;">
                <div class="card-body" style="padding:26px 28px;">

                    <h3 style="font-weight:700; color:#333; font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            MOBIL TOYOTA LAINNYA
                        </span>
                    </h3>

                    <div class="row">

                        {{-- NEW INNOVA --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/innova.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW INNOVA</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 380.585.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 78 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 5 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- NEW FORTUNER --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/fortuner.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW FORTUNER</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 613.487.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 119 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 7 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- NEW VOXY --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/voxy.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW VOXY</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 591.287.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 177 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 10 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- NEW AVANZA --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/avanza.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW AVANZA</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 247.791.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 30 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 3 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- NEW RAIZE --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/NEW RAIZE.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW RAIZE</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 257.033.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 29 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 2 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- NEW YARIS --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/NEW YARIS.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW YARIS</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 295.939.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 59 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 4 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- VELOZ --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/VELOZ.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW VELOZ</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 299.855.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 33 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 3 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- RUSH --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/rush.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW RUSH</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 331.733.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 59 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 4 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="#">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
        font-weight: 800;
        font-size: 20px;
        color: #33ccff;
        margin-bottom: 12px;
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
        color: #000;
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

    /* ===== GALERI ===== */
    .warna-scroll {
        display: flex;
        gap: 14px;
        overflow-x: auto;
        padding: 10px 0;
    }

    .warna-card {
        min-width: 160px;
        text-align: center;
        cursor: pointer;
    }

    .warna-card img {
        width: 100%;
        border-radius: 8px;
        transition: 0.3s;
    }

    .warna-card img:hover {
        transform: scale(1.05);
    }

    .warna-label {
        margin-top: 6px;
        font-weight: 600;
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

    .toyota-card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .toyota-card img {
        max-height: 220px;
        object-fit: contain;
        margin-bottom: 15px;
    }

    .toyota-list {
        margin-top: auto;
        padding-bottom: 10px;
    }

    .toyota-list .link {
        margin-top: auto;
    }

    .lightbox-prev {
        left: 30px;
    }

    .lightbox-next {
        right: 30px;
    }


    .video-thumb {
        position: relative;
        transition: all 0.3s ease;
    }

    .video-thumb:hover {
        transform: translateY(-5px);
    }

    .play-btn-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0.8;
    }

    .play-icon {
        width: 42px;
        height: 42px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #e53935;
        font-size: 18px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        padding-left: 4px;
    }

    .video-title {
        font-size: 0.78rem;
        font-weight: 600;
        line-height: 1.2;
        color: #333;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .video-card:hover .video-title {
        color: #e53935 !important;
    }

    .video-card {
        height: 165px;
        display: flex;
        flex-direction: column;
    }

    .video-card img {
        height: 105px !important;
        object-fit: cover;
    }

    .chevron-down {
        width: 14px;
        height: 14px;
        border-right: 3px solid #111;
        border-bottom: 3px solid #111;
        transform: rotate(45deg);
        margin: 0 auto;
        cursor: pointer;
        transition: 0.3s;
    }

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
    }

    .warna-card img {
        width: 100%;
        height: 130px;
        object-fit: cover;
    }

    .warna-label {
        background: #6b7280;
        color: white;
        text-align: center;
        padding: 6px;
        font-weight: 600;
        font-size: .8rem;
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