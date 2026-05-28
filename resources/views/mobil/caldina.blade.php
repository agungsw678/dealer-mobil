@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        <div class="col-lg-9">

            {{-- Slider --}}
            <div id="mainSlider" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/CaldinaBlade.png') }}"
                            class="d-block w-100"
                            style="height:auto; width:100%;">
                    </div>
                </div>
            </div>

            {{-- DETAIL PRODUK --}}
            <div class="card border-0 rounded-0"
                style="margin-top:-6px; background:#f1f1f1; border-top:4px solid #33ccff;">

                <div class="card-body" style="padding:25px 30px;">

                    <h3 style="font-weight:700; color:#333333; font-size:18px; margin-bottom:10px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">
                            TOYOTA NEW CALDINA
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
                    ['Harga mulai', 'Rp 257.033.000'],
                    ['Kredit mulai', 'Rp 29 Jutaan'],
                    ['Cicilan mulai', 'Rp 2 Jutaan'],
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
                        <span style="color:#444; font-weight:700; font-size:.9rem;">
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
                            Menerima Pembelian Secara Tunai atau Kredit dengan Berbagai Pilihan Leasing dan Finance. Juga Menerima Tukar Tambah Segala Merk.
                            Diproses Cepat mulai 1 Hari Kerja, Persyaratan Mudah. Syarat dan Ketentuan berlaku di wilayah Surabaya, Sidoarjo, Gresik, Mojokerto, Kediri, Malang Jawa Timur
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
                <div style="padding:18px 24px; background:#f1f1f1;">
                    <h2 style="margin:0; font-size:18px; font-weight:700; color:#2c3e50;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            DAFTAR HARGA NEW CALDINA
                        </span>
                    </h2>
                </div>

                <!-- Tabel -->
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                    <thead>
                        <tr>
                            <th style="width:50%; background:#6c757d; color:#ffffff; padding:8px 10px; font-size:14px; text-align:center; border-right:1px solid #8a8a8a;">
                                TIPE
                            </th>
                            <th style="width:50%; background:#6c757d; color:#ffffff; padding:8px 10px; font-size:14px; text-align:center;">
                                HARGA
                            </th>
                        </tr>
                    </thead>
                    <tbody style="background:#f8f9fa;">

                        <!-- Kategori -->
                        <tr>
                            <td colspan="2" style="padding:14px 20px; font-weight:700; color:#2c3e50; border-bottom:1px solid #dcdcdc;">
                                NEW CALDINA
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc;">
                                2.0 G AT
                            </td>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc; font-weight:700; color:#2c3e50;">
                                Rp 180.000.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc;">
                                2.0 ZT AT
                            </td>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc; font-weight:700; color:#2c3e50;">
                                Rp 210.000.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc;">
                                2.0 GT-T Turbo
                            </td>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc; font-weight:700; color:#2c3e50;">
                                Rp 250.000.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc;">
                                2.0 GT-Four AWD
                            </td>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc; font-weight:700; color:#2c3e50;">
                                Rp 300.000.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc;">
                                1.8 X AT
                            </td>
                            <td style="padding:14px 20px; border-bottom:1px solid #dcdcdc; font-weight:700; color:#2c3e50;">
                                Rp 160.000.000
                            </td>
                        </tr>

                        <tr>
                            <td style="padding:14px 20px;">
                                2.0 Touring Wagon
                            </td>
                            <td style="padding:14px 20px; font-weight:700; color:#2c3e50;">
                                Rp 200.000.000
                            </td>
                        </tr>

                    </tbody>
                </table>

                <!-- Keterangan -->
                <div style="padding:24px; font-size:16px; line-height:1.6; color:#5f6f7f; background:white;">
                    Informasi daftar harga diatas merupakan harga mobil baru Toyota New CALDINA yang sudah OTR
                    ( On The Road ) Belum Dikurangi Cashback yang berlaku di <b>Solo Raya Jawa Tengah</b>
                    pada bulan Februari 2026. Dapat berubah sewaktu-waktu tanpa pemberitahuan.
                </div>

            </div>

            {{-- PILIHAN WARNA --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:12;">

                <h3 style="font-weight:700; color:#333; font-size:18px;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px;">
                        PILIHAN WARNA NEW CALDINA
                    </span>
                </h3>

                @php
                $warna = [
                ['gambar'=>'NewCaldina2.png','nama'=>'Warna White Toyota Calya','caption'=>'Warna White Putih Toyota Calya Solo Raya Jawa Tengah'],
                ['gambar'=>'NewCaldina3.png','nama'=>'Warna Orange Metallic To...','caption'=>'Warna Warna Orange Metallic Toyota New Calya Solo Raya Jawa Tengah'],
                ['gambar'=>'NewCaldina4.png','nama'=>'Warna Red Toyota New Calya','caption'=>'Warna Red Merah Toyota New Calya Solo Raya Jawa Tengah'],
                ['gambar'=>'NewCaldina5.png','nama'=>'Warna Silver Metallic Toy...','caption'=>'Warna Silver Metallic Toyota New Calya Solo Raya Jawa Tengah'],
                ['gambar'=>'NewCaldina6.png','nama'=>'Warna Black Toyota New Cal...','caption'=>'Warna Black Toyota New Calya SoloRaya Jawa Tengah'],
                ['gambar'=>'NewCaldina7.png','nama'=>'Warna Bronze Mica Metallic','caption'=>'Warna Bronze Mica Metallic Toyota New Calya Solo Raya Jawa Tengah'],
                ['gambar'=>'NewCaldina8.png','nama'=>'Warna Blue Toyota New Ca...','caption'=>'Warna Blue Toyota New Calya Solo Raya Jawa Tengah'],
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

            <div class="card mt-2 shadow-sm" style="border-radius:14px;background:white;">
                <div class="card-body spec-box">

                    <h4 style="font-weight:700; color:#333; font-size:18px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            REVIEW SPESIFIKASI NEW CALDINA
                        </span>
                    </h4>

                    <p class="spec-text">
                        Toyota Caldina merupakan wagon sporty dengan performa tangguh yang populer
                        sebagai mobil import dari Jepang (JDM). Mengusung desain elegan, kabin luas,
                        serta mesin bertenaga yang cocok untuk kebutuhan harian maupun perjalanan jauh.
                    </p>

                    <p class="spec-subtitle">
                        <strong>Performa Mesin Toyota Caldina:</strong>
                    </p>

                    <ul class="spec-list">
                        <li>Pilihan Mesin</li>
                        <li class="no-dot">
                            1. 2.0L 4 Silinder DOHC (3S-GTE Turbo / 1AZ-FSE)
                        </li>
                    </ul>

                    <!-- DETAIL BAWAH -->
                    <div id="specDetail" class="spec-detail">

                        <!-- EKSTERIOR -->
                        <h6 class="spec-subtitle mt-3"><strong>Eksterior Toyota Caldina</strong></h6>
                        <ul class="spec-list">
                            <li>Halogen / Projector Headlamp</li>
                            <li>Front Grille Stylish Design</li>
                            <li>Fog Lamp</li>
                            <li>Power Adjustable Side Mirror</li>
                            <li>Roof Rail (Touring Wagon Style)</li>
                            <li>Rear Spoiler</li>
                            <li>Alloy Wheel 15-17 inch</li>
                            <li>Rear Wiper</li>
                        </ul>

                        <!-- DIMENSI -->
                        <h6 class="spec-subtitle mt-3"><strong>Dimensi</strong></h6>
                        <ul class="spec-list">
                            <li>Panjang: ±4510 mm</li>
                            <li>Lebar: ±1740 mm</li>
                            <li>Tinggi: ±1445 mm</li>
                            <li>Wheelbase: ±2700 mm</li>
                            <li>Ground Clearance: ±155 mm</li>
                            <li>Turning Radius: ±5.5 m</li>
                            <li>Velg & Ban: 195/65 R15 - 215/50 R17</li>
                        </ul>

                        <!-- INTERIOR -->
                        <h6 class="spec-subtitle mt-3"><strong>Interior Toyota Caldina</strong></h6>
                        <ul class="spec-list">
                            <li>Kabin luas dengan desain ergonomis</li>
                            <li>Head Unit Audio (Radio, CD, AUX)</li>
                            <li>AC Manual / Digital (tergantung tipe)</li>
                            <li>Power Window & Central Lock</li>
                            <li>Fabric / Leather Seat (tergantung varian)</li>
                            <li>Tilt Steering</li>
                            <li>Rear Seat Foldable (60:40)</li>
                        </ul>

                        <!-- KESELAMATAN -->
                        <h6 class="spec-subtitle mt-3"><strong>Keselamatan</strong></h6>
                        <ul class="spec-list">
                            <li>Anti-Lock Braking System (ABS)</li>
                            <li>Electronic Brake Distribution (EBD)</li>
                            <li>Dual Airbags</li>
                            <li>Seatbelt Pretensioner</li>
                            <li>Side Impact Beam</li>
                            <li>Child Safety Lock</li>
                        </ul>

                        <!-- DISCLAIMER -->
                        <p class="spec-disclaimer mt-4">
                            <strong>Disclaimer:</strong> Spesifikasi Toyota Caldina dapat berbeda
                            tergantung tahun produksi dan kondisi unit (import/bekas).
                            Untuk informasi lebih detail, silakan hubungi penjual atau dealer terkait.
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
            <div class="card mt-2 shadow-sm" style="border-radius:14px; background:white;">
                <div class="card-body" style="padding:26px 28px;">

                    <h3 style="font-weight:700; font-size:20px; color:#1f2937; margin-bottom:22px;">
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