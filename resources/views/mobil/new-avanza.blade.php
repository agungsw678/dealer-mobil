@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        <div class="col-lg-9">

            {{-- Slider --}}
            <div id="mainSlider" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/NewAvanza.png') }}"
                            class="d-block w-100"
                            style="height:520px; object-fit:cover;"
                            alt="Toyota New Avanza">
                    </div>
                </div>
            </div>

            {{-- DETAIL PRODUK --}}
            <div class="card border-0 rounded-0"
                style="margin-top:-6px; background:#f1f1f1; border-top:4px solid #33ccff;">

                <div class="card-body" style="padding:25px 30px;">

                    <h3 style="font-weight:700; color:#333333; font-size:23px; margin-bottom:10px;font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">
                            TOYOTA NEW AVANZA SOLO
                        </span>
                    </h3>

                    {{-- SUBTITLE --}}
                    <link rel="stylesheet" href="{{ asset('css/dealer-custom.css') }}">
                    <p class="fs-6 text-dark lh-base mb-1">
                        Informasi Pembelian, Test Drive, Simulasi Kredit Mobil Baru
                        Toyota Corolla Cross 2026 Solo Raya Jawa Tengah.<br>
                        Beli Sekarang Disini Dapatkan Promonya Dibawah Ini
                    </p>

                    <hr style="margin:2px 0 4px 0; opacity:.25;">

                    {{-- LIST --}}
                    @php
                    $items = [
                    ['Harga mulai', 'Rp 247.791.000'],
                    ['Kredit mulai', 'Rp 30 Jutaan'],
                    ['Cicilan mulai', 'Rp 3Jutaan'],
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
                            Anti Karat, Door Handle, Seat Cover, Karpet Dasar, Paket Servis
                        </div>
                    </div>

                    <hr style="margin:6px 0; opacity:.2;">

                    {{-- DESKRIPSI --}}
                    <div id="detailDeskripsi" style="display:none;">
                        <p style="font-size:.9rem; color:#555; line-height:1.5;">
                            Menerima Pembelian Secara Tunai atau Kredit dengan Berbagai Pilihan Leasing dan Finance.
                            Juga Menerima Tukar Tambah Segala Merk.
                            Diproses Cepat mulai 1 Hari Kerja, Persyaratan Mudah.
                            Syarat dan Ketentuan berlaku di dealer resmi.
                        </p>
                    </div>

                    {{-- PANAH --}}
                    <div class="text-center mt-3">
                        <div class="chevron-down arrow-btn" data-target="detailDeskripsi"></div>
                    </div>
                </div>
            </div>

            <div style="margin-top:15px; background:#e9ecef; border-radius:12px; padding:0; border:1px solid #d6d6d6; overflow:hidden;">

                <!-- Judul -->
                <div style="padding:18px 24px; background:white;font-size:18px;">
                    <h2 style="margin:0; font-size:22px; font-weight:700; color:#2c3e50;font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">
                            DAFTAR HARGA NEW AVANZA
                        </span>
                    </h2>
                </div>

                <!-- Tabel -->
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                    <thead>
                        <tr>
                            <th style="width:50%; background:#6c757d; color:#ffffff; padding:6px; font-size:14px; text-align:center; border:1px solid #8a8a8a;">
                                TIPE
                            </th>
                            <th style="width:50%; background:#6c757d; color:#ffffff; padding:6px; font-size:14px; text-align:center; border:1px solid #8a8a8a;">
                                HARGA
                            </th>
                        </tr>
                    </thead>

                    <tbody style="background:#f1f3f5;">

                        <!-- Kategori -->
                        <tr>
                            <td colspan="2" style="padding:10px 15px; font-weight:700; color:#2c3e50; border:1px solid #dcdcdc;">
                                NEW AVANZA
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc;">
                                1.3 E M/T
                            </td>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc; text-align:center; font-weight:700; color:#2c3e50;">
                                Rp 243.700.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc;">
                                1.3 E CVT
                            </td>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc; text-align:center; font-weight:700;">
                                Rp 258.700.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc;">
                                1.5 G M/T
                            </td>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc; text-align:center; font-weight:700;">
                                Rp 266.800.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc;">
                                1.5 G CVT
                            </td>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc; text-align:center; font-weight:700;">
                                Rp 281.600.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc;">
                                1.5 G CVT TSS
                            </td>
                            <td style="padding:10px 15px; border:1px solid #dcdcdc; text-align:center; font-weight:700;">
                                Rp 308.500.000
                            </td>
                        </tr>

                    </tbody>
                </table>

                <!-- Keterangan -->
                <div style="padding:24px; font-size:15px; line-height:1.6; color:#5f6f7f; background:white;">
                    Informasi daftar harga diatas merupakan harga mobil baru Toyota New Corolla Cross yang sudah OTR
                    ( On The Road ) Belum Dikurangi Cashback yang berlaku di <b>Solo Raya Jawa Tengah</b>
                    pada bulan Februari 2026. Dapat berubah sewaktu-waktu tanpa pemberitahuan.
                </div>

            </div>

            {{-- EKSTERIOR NEW AVANZA --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12px;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        EKSTERIOR NEW AVANZA
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'NewAvanza1.png', 'caption'=>'Eksterior Depan Toyota Avanza Turquoise Metallic Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'NewAvanza2.png', 'caption'=>'Eksterior Depan Toyota New Avanza Turquoise Metallic Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'NewAvanza3.png', 'caption'=>'Eksterior Samping Toyota New Avanza Turquoise Metallic Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'NewAvanza4.png', 'caption'=>'Eksterior Belakang Toyota New Avanza Turquoise Metallic Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'NewAvanza5.png', 'caption'=>'Eksterior Belakang Toyota New Avanza Turquoise Metallic Black Top Surabaya Raya Jawa Tengah'],
                ];
                @endphp

                <div style="display:flex; gap:10px; overflow-x:auto; padding-top:10px;">

                    @foreach($warna as $w)
                    <div style="min-width:200px; border-radius:0;">
                        <img
                            src="{{ asset('images/'.$w['gambar']) }}"
                            data-full="{{ asset('images/'.$w['gambar']) }}"
                            data-caption="{{ $w['caption'] ?? 'Corolla Cross' }}"
                            class="open-lightbox"
                            style="width:100%; border-radius:0; cursor:pointer;">
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
            {{-- INTERIOR NEW AVANZA --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        INTERIOR NEW AVANZA
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'InteriorAvanza.png','caption'=>'New Comfortable Full Dashboard Interior All Avanza Surabaya Raya Jawa Tengah'],
                ['gambar'=>'InteriorAvanza1.png','caption'=>'New Integrated 9-inch HeadUnit All New Avanza Solo Raya Jawa Tengah'],
                ['gambar'=>'InteriorAvanza2.png','caption'=>'New Rear-Seat Entertainment All New Avanza Solo Raya Jawa Tengah'],
                ['gambar'=>'InteriorAvanza3.png','caption'=>'New Wireless Charger All New Avanza Solo Raya Jawa Tengah'],
                ['gambar'=>'InteriorAvanza4.png','caption'=>'New Advanced 7-inch Digital TFT MID All New Avanza Solo Raya Jawa Tengah'],
                ['gambar'=>'InteriorAvanza5.png','caption'=>'New Spacious Cabin with New Long Sofa Mode All New Corolla Cross Solo Raya Jawa Tengah'],
                ];
                @endphp

                <div style="display:flex; gap:10px; overflow-x:auto; padding-top:10px;">

                    @foreach($warna as $w)
                    <div style="min-width:200px; border-radius:0;">
                        <img
                            src="{{ asset('images/'.$w['gambar']) }}"
                            data-full="{{ asset('images/'.$w['gambar']) }}"
                            data-caption="{{ $w['caption'] ?? 'Corolla Cross' }}"
                            class="open-lightbox"
                            style="width:100%; border-radius:0; cursor:pointer;">
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

            {{-- PILIHAN WARNA --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        PILIHAN WARNA NEW AVANZA
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'WarnaAvanza.png','nama'=>'Warna Turquoise Metallic','caption'=>'Pilihan Warna Turquoise Metallic Solo Raya Jawa Tengah'],
                ['gambar'=>'WarnaAvanza1.png','nama'=>'Warna Yellow Black Top','caption'=>'Pilihan Warna Yellow Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'WarnaAvanza2.png','nama'=>'Warna Red Black Top','caption'=>'Pilihan Warna Red Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'WarnaAvanza3.png','nama'=>'Warna Silver Metallic Black Top ','caption'=>'Pilihan Warna Silver Metallic Black Top Solo Raya Jawa Tengah'],
                ['gambar'=>'WarnaAvanza4.png','nama'=>'Warna Turquoise Metallic','caption'=>'Pilihan Warna Turquoise Metallic Solo Raya Jawa Tengah'],
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
                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        BLOG VIDEO NEW AVANZA
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
                        src="https://www.youtube.com/embed/cMOIkxUsmUE?autoplay=1&mute=1&rel=0"
                        allow="autoplay; encrypted-media"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="card mt-2 shadow-sm" style="border-radius:14px;background:#ffffff;">
                <div class="card-body spec-box">

                    <h3 style="font-weight:700; color:#333;font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">
                            REVIEW SPESIFIKASI NEW AVANZA
                        </span>
                    </h3>

                    <p class="spec-text">
                        Toyota Avanza merupakan MPV yang populer di Indonesia, dikenal dengan kenyamanan dan kemampuan transportasi yang baik.
                        Performa mesin yang handal serta efisiensi bahan bakar yang optimal menjadikan mobil ini cocok untuk penggunaan harian maupun perjalanan jauh.
                        Dirancang dengan kabin luas, fitur modern, dan kenyamanan maksimal untuk keluarga.
                    </p>

                    <p class="spec-subtitle">
                        Performa Mesin Toyota Avanza:
                    </p>

                    <ul class="spec-list">
                        <li>Pilihan Mesin</li>
                        <li class="no-dot">
                            1. 1.3L 4 Silinder Dual VVT-i
                        </li>
                        <li class="no-dot">
                            2. 1.5L 4 Silinder Dual VVT-i
                        </li>
                    </ul>

                    <!-- DETAIL BAWAH -->
                    <div id="specDetail" class="spec-detail">

                        <!-- EKSTERIOR -->
                        <h6 class="spec-subtitle mt-3">Eksterior Toyota Avanza</h6>
                        <ul class="spec-list">
                            <li>LED Headlamp</li>
                            <li>Front Grille Modern Design</li>
                            <li>Power Retractable Side Mirror</li>
                            <li>Shark Fin Antenna</li>
                            <li>Rear Spoiler with High Mount Stop Lamp</li>
                            <li>Alloy Wheel 15-inch / 16-inch</li>
                            <li>Rear Wiper</li>
                            <li>Fog Lamp (tipe tertentu)</li>
                        </ul>

                        <!-- DIMENSI -->
                        <h6 class="spec-subtitle mt-3">Dimensi</h6>
                        <ul class="spec-list">
                            <li>Panjang: ±4395 mm</li>
                            <li>Lebar: ±1730 mm</li>
                            <li>Tinggi: ±1700 mm</li>
                            <li>Wheelbase: ±2750 mm</li>
                            <li>Ground Clearance: ±205 mm</li>
                            <li>Turning Radius: ±4.9 m</li>
                            <li>Velg & Ban: 185/65 R15 / 195/60 R16</li>
                        </ul>

                        <!-- INTERIOR -->
                        <h6 class="spec-subtitle mt-3">Interior Toyota Avanza</h6>
                        <ul class="spec-list">
                            <li>Spacious Cabin</li>
                            <li>Digital MID Display</li>
                            <li>7-inch / 9-inch Touchscreen Head Unit</li>
                            <li>Bluetooth & USB Connectivity</li>
                            <li>Audio Steering Switch</li>
                            <li>Manual / Digital AC</li>
                            <li>Rear AC Vent</li>
                            <li>Push Start Button (tipe tertentu)</li>
                            <li>Tilt Steering</li>
                            <li>Fabric Seat</li>
                            <li>Rear Seat 50:50 Split Folding</li>
                        </ul>

                        <!-- KESELAMATAN -->
                        <h6 class="spec-subtitle mt-3">Keselamatan</h6>
                        <ul class="spec-list">
                            <li>Dual SRS Airbag</li>
                            <li>Vehicle Stability Control (VSC)</li>
                            <li>Hill Start Assist (HSA)</li>
                            <li>Anti-Lock Braking System (ABS)</li>
                            <li>Electronic Brake Distribution (EBD)</li>
                            <li>Brake Assist (BA)</li>
                            <li>Rear Parking Sensor</li>
                            <li>Rear Camera (tipe tertentu)</li>
                            <li>Seatbelt Warning</li>
                            <li>Isofix</li>
                        </ul>

                        <!-- DISCLAIMER -->
                        <p class="spec-disclaimer mt-4">
                            <strong>Disclaimer:</strong> Warna dan spesifikasi dapat berbeda tergantung
                            perangkat dan varian. Spesifikasi dapat berubah sewaktu-waktu tanpa
                            pemberitahuan. Untuk informasi lebih detail, silakan hubungi dealer Toyota
                            atau lakukan test drive.
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
            <!-- LIGHTBOX -->
            <div id="lightbox" class="lightbox">
                <span class="lightbox-close">&times;</span>
                <span class="lightbox-prev">&#10094;</span>
                <span class="lightbox-next">&#10095;</span>

                <img class="lightbox-img">
                <div class="lightbox-caption"></div>
            </div>
            {{-- MOBIL TOYOTA LAINNYA --}}
            <div class="card mt-2 shadow-sm" style="border-radius:14px; background:white;">
                <div class="card-body" style="padding:26px 28px;">

                    <h3 style="font-weight:700; font-size:18px; color:#1f2937; margin-bottom:22px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">
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
                                        <a href="{{ route('mobil.innova') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.fortuner') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.voxy') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.avanza') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.raize') }}">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- NEW YARIZ --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/NEW YARIZ.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW YARIZ</h4>

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
                                        <a href="{{ route('mobil.yariz') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.veloz') }}">Lihat Selengkapnya</a>
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
                                        <a href="{{ route('mobil.rush') }}">Lihat Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- NEW CALYA --}}
                        <div class="col-md-6">
                            <div class="toyota-card">
                                <img src="{{ asset('images/Calya.png') }}" class="img-fluid">

                                <h4 class="toyota-title">NEW CALYA</h4>

                                <ul class="toyota-list">
                                    <li>
                                        <span>Harga mulai</span>
                                        <strong>Rp 173.363.000</strong>
                                    </li>
                                    <li>
                                        <span>Kredit mulai</span>
                                        <strong>Rp 38 Jutaan</strong>
                                    </li>
                                    <li>
                                        <span>Cicilan mulai</span>
                                        <strong>Rp 3 Jutaan</strong>
                                    </li>
                                    <li class="link">
                                        <a href="{{ route('mobil.calya') }}">Lihat Selengkapnya</a>
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
                    <div class="py-1" style="font-size:1.2rem;">ALEX BIZER</div>
                    <div style="border-top:1px solid rgba(255,255,255,0.3);"></div>
                    <div class="py-1">
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