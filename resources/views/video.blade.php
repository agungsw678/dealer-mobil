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
                             style="height:520px; object-fit:cover;"
                             alt="Toyota Raize">
                    </div>
                </div>
            </div>
            
            {{-- DETAIL PRODUK --}}
            <div class="card border-0 rounded-0" 
                 style="margin-top:-6px; background:#f1f1f1; border-top:4px solid #33ccff;">
                 
                <div class="card-body" style="padding:25px 30px;">

                    <h3 style="font-weight:800; color:#333333; font-size:23px; margin-bottom:10px;">
                        <span style="border-left:5px solid #33ccff; padding-left:10px;">
                            TOYOTA RAIZE SOLO
                        </span>
                    </h3>

                    {{-- SUBTITLE --}}
                    <p style="font-size:.95rem; color:#444; line-height:1.5; margin-bottom:4px;">
                        Informasi Pembelian, Test Drive, Simulasi Kredit Mobil Baru 
                        Toyota Raize & New Venturer 2026 Solo Raya Jawa Tengah.<br>
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
                        <span style="color:#1a237e; font-weight:700; font-size:.9rem;">
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
        Syarat dan Ketentuan berlaku di dealer resmi.
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
    <span style="border-left:6px solid #33ccff; padding-left:12px;">
        DAFTAR HARGA TOYOTA TERBARU
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
                                Raize 1.2 G MT
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 257.033.000
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-weight:700; background:#fafafa; padding:10px 12px; border-bottom:1px solid #e5e7eb;">
                                NEW VENTURER
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:16px; color:#1f2937;">
                                2.4 AT Diesel
                            </td>
                            <td style="padding:10px 12px; border-bottom:1px solid #e5e7eb; font-size:18px; font-weight:700; color:#1f2937;">
                                Rp 536.893.000
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
            <div class="card mt-4 shadow-sm p-4" style="background:#f3f3f3; border-radius:10px;">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:6px solid #33ccff; padding-left:12px;">
                        PILIHAN WARNA TOYOTA RAIZE
                    </span>
                </h3>

                @php
                $warna = [
                    ['nama'=>'Turquoise MM','gambar'=>'12.jpg'],
                    ['nama'=>'Yellow SE','gambar'=>'13.jpg'],
                    ['nama'=>'Red','gambar'=>'14.jpg'],
                    ['nama'=>'Silver Metallic','gambar'=>'15.jpg'],
                    ['nama'=>'Black','gambar'=>'16.jpg'],
                ];
                @endphp

                <div class="warna-scroll">
        @foreach($warna as $w)
        <div class="warna-card">
            <img 
                src="{{ asset('images/'.$w['gambar']) }}"
                data-full="{{ asset('images/'.$w['gambar']) }}"
                data-caption="Warna {{ $w['nama'] }} Toyota Raize"
                class="open-lightbox"
            >
            <div class="warna-label">
                {{ $w['nama'] }}
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
            <div class="card mt-4 shadow-sm p-4" style="background:#f3f3f3; border-radius:10px;">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:6px solid #33ccff; padding-left:12px;">
                        BLOG VIDEO TOYOTA SOLO
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

                {{-- VIDEO LAINNYA --}}
                @php
                    $videos = [
                        ['id'=>'IqOi_W1bGAk','title'=>'Product Exploration : Toyota New Raize'],
                        ['id'=>'Miek9Fe1YRM','title'=>'Test Drive Toyota Venturer Diesel Review'],
                        ['id'=>'xCXi791KYMg','title'=>'Toyota New Innova Facelift'],
                        ['id'=>'dRG2fDha4rI','title'=>'Toyota New Calya Review'],
                    ];
                @endphp

                <div class="row g-3">
                    @foreach($videos as $video)
                    <div class="col-md-3 col-6">
                        <div class="shadow-sm bg-white video-item video-card"
                             data-id="{{ $video['id'] }}"
                             style="cursor:pointer;">

                            <img src="https://img.youtube.com/vi/{{ $video['id'] }}/mqdefault.jpg"
                                 class="img-fluid w-100"
                                 style="height:120px; object-fit:cover;">

                            <div style="padding:6px 8px;">
                                <div class="video-title">
                                    {{ $video['title'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="card mt-4 shadow-sm" style="border-radius:14px;background:#ffffff;">
    <div class="card-body spec-box">

        <h4 class="spec-title">
    <span style="border-left:6px solid #33ccff; padding-left:15px;">
        REVIEW SPESIFIKASI NEW VENTURER
    </span>
</h4>


        <p class="spec-text">
            Toyota Venturer merupakan mobil MPV Medium juga termasuk flagship tipe tertinggi
            dari Kijang Innova memiliki tampilan sporty, gagah dan stylis.
        </p>

        <p class="spec-subtitle">
            Performa Mesin Toyota New Venturer:
        </p>

        <ul class="spec-list">
            <li>Pilihan Mesin</li>
            <li class="no-dot">
                1. Bensin 1998cc 1TR-FE 4 Cylinders in-line, 16 valve DOHC with Dual VVT-i
            </li>
        </ul>

        <!-- DETAIL BAWAH -->
<div id="specDetail" class="spec-detail">

    <!-- EKSTERIOR -->
    <h6 class="spec-subtitle mt-3">Eksterior Toyota New Venturer</h6>
    <ul class="spec-list">
        <li>Headlamp LED Projector</li>
        <li>Auto Light Control System with Follow-me-home</li>
        <li>Light Adjustable System</li>
        <li>Illuminating LED Fog Lamp</li>
        <li>Distinctive Front Grille With New Bumper Spoiler Package</li>
        <li>Side Mirror with Turn Signal</li>
        <li>Sleek Rear Spoiler</li>
        <li>Pelek Dynamic 17-inch Alloy Wheel</li>
        <li>Rain Wiper</li>
    </ul>

    <!-- DIMENSI -->
    <h6 class="spec-subtitle mt-3">Dimensi</h6>
    <ul class="spec-list">
        <li>Panjang: 4755 mm</li>
        <li>Lebar: 1830 mm</li>
        <li>Tinggi: 1795 mm</li>
        <li>Wheelbase: 2750 mm</li>
        <li>Ground Clearance: 178 mm</li>
        <li>Turning Radius: 5.4 m</li>
        <li>Wheel and Spare Tyre: 17-inch Alloy Wheel 215/55 R17</li>
    </ul>

    <!-- INTERIOR -->
    <h6 class="spec-subtitle mt-3">Interior Toyota New Venturer</h6>
    <ul class="spec-list">
        <li>Luxurious Cabin Interior with black evaporated leatherette and red stitch captain seat</li>
        <li>Premium Dashboard with darker wooden panel</li>
        <li>9-inch Touch Screen Head Unit (Radio, Bluetooth, USB, Miracast, Smartphone Connection, NFC)</li>
        <li>Speakers 6 Positions</li>
        <li>Adjustable Auto AC</li>
        <li>Electric Windows Automatic with Jam-protection</li>
        <li>Premium Illumination Light Ambiance</li>
        <li>Room Lamp with Lighting Control</li>
        <li>Integrated Air Purifier (Car Ionizer)</li>
        <li>Tilt & Telescopic Steering</li>
        <li>Steering Wheel Leather with Wood Grain and Silver Material</li>
        <li>Seat Back Table</li>
        <li>Seats Material Black Leather and Synthetic Leather</li>
    </ul>

    <!-- KESELAMATAN -->
    <h6 class="spec-subtitle mt-3">Keselamatan</h6>
    <ul class="spec-list">
        <li>Vehicle Stability Control (VSC)</li>
        <li>Hill Start Assist (HSA)</li>
        <li>Anti-Lock Braking System (ABS)</li>
        <li>Electronic Braking-Force Distribution (EBD)</li>
        <li>Isofix with Tether Anchor</li>
    </ul>

    <!-- DISCLAIMER -->
    <p class="spec-disclaimer mt-4">
        <strong>Disclaimer:</strong> Warna yang ditampilkan mungkin sedikit berbeda dengan aslinya karena
        perbedaan resolusi pada setiap perangkat. Fitur dapat berubah sewaktu-waktu tanpa pemberitahuan.
        Tidak semua fitur disebutkan di sini. Untuk informasi lebih lengkap, silakan lakukan test drive
        dengan marketing terkait.
    </p>

</div>


        <div class="text-center mt-3">
    <div class="chevron-down arrow-btn" data-target="specDetail"></div>
</div>


    </div>
</div>


            {{-- Galeri Delivery --}}
            <div class="card mt-4 shadow-sm p-4" style="background:#f3f3f3; border-radius:10px;">
    <h3 style="font-weight:700; color:#333;">
        <span style="border-left:6px solid #33ccff; padding-left:12px;">
            Galeri Delivery Toyota Solo
        </span>
    </h3>

    @php
        $gallery = [
            'gambar1.png','gambar2.png','gambar3.png','gambar4.png',
            'gambar5.png','gambar6.png','gambar7.png','gambar8.png'
        ];
    @endphp

    <div class="warna-scroll">
        @foreach($gallery as $img)
        <div class="warna-card">
            <img
                src="{{ asset('images/'.$img) }}"
                data-full="{{ asset('images/'.$img) }}"
                data-caption="Galeri Delivery Toyota Solo"
                class="open-lightbox"
            >
        </div>
        @endforeach
    </div>
</div>
{{-- MOBIL TOYOTA LAINNYA --}}
<div class="card mt-4 shadow-sm" style="border-radius:14px; background:#ffffff;">
    <div class="card-body" style="padding:26px 28px;">

        <h3 style="font-weight:800; font-size:20px; color:#1f2937; margin-bottom:22px;">
            <span style="border-left:6px solid #33ccff; padding-left:12px;">
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


{{-- Footer --}}
<footer style="background: #4b545c; color: #d2d6de; padding: 25px 0; margin-top: 30px; font-size: 1rem; width:100%;">
    <div class="container-fluid px-4">
        <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-start">
                <span>© 2026 All Rights Reserved www.toyotasolo.com</span>
            </div>
            <div class="col-md-4 text-center text-md-end mt-2 mt-md-0">
                <span>Designed by 
                    <span style="color: #ff4d4d; font-weight: bold;">Politeknik</span>
                    <span style="color: #ffcc00; font-weight: bold;">Negeri</span>
                    <span style="color: #33ccff; font-weight: bold;">Madiun</span>
                </span>
            </div>
        </div>
    </div>
</footer>

{{-- CSS Tambahan --}}
<style>
    .spec-box{
    padding:28px 30px;
}

.spec-text{
    font-size:1.08rem;
    color:#374151;
    line-height:1.6;
    margin-bottom:14px;
}

.spec-subtitle{
    font-size:1.08rem;
    font-weight:500;
    color:#374151;
    margin-bottom:6px;
}

.spec-list{
    padding-left:22px;
    font-size:1.08rem;
    color:#374151;
    margin-bottom:0;
}

.spec-list li{
    margin-bottom:4px;
}

.spec-list .no-dot{
    list-style:none;
    margin-left:-18px;
}

.spec-detail{
    display:none;
    margin-top:10px;
}
.toyota-list {
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 2px solid #e5e7eb;
}

.spec-arrow{
    display:flex;
    justify-content:center;
    margin-top:14px;
    cursor:pointer;
}
.toyota-card{
    text-align:left;
}
.toyota-card img{
    display:block;
    margin:0 auto 14px;
}


.toyota-card img{
    max-width:100%;
    margin-bottom:14px;
}

.toyota-title{
    font-weight:800;
    font-size:20px;
    color:#33ccff;
    margin-bottom:12px;
}

.toyota-list{
    list-style:none;
    padding:0;
    margin:0;
    text-align:left;
}

.toyota-list li{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:8px;
    font-size:15px;
    color:#4b545c;
}

.toyota-list li::before{
    content:"•";
    color:#000;
    font-size:22px;
    line-height:1;
}

.toyota-list strong{
    color:#1e3a8a;
    font-weight:800;
}

.toyota-list .link::before{
    content:"•";
}

.toyota-list .link a{
    color:#374151;
    font-weight:500;
    text-decoration:none;
}

.toyota-list .link a:hover{
    text-decoration:underline;
}

.spec-arrow span{
    width:18px;
    height:18px;
    border-right:3px solid #374151;
    border-bottom:3px solid #374151;
    transform:rotate(45deg);
}
/* ===== GALERI ===== */
.warna-scroll{
    display:flex;
    gap:14px;
    overflow-x:auto;
    padding:10px 0;
}

.warna-card{
    min-width:160px;
    text-align:center;
    cursor:pointer;
}

.warna-card img{
    width:100%;
    border-radius:8px;
    transition:0.3s;
}

.warna-card img:hover{
    transform:scale(1.05);
}

.warna-label{
    margin-top:6px;
    font-weight:600;
}

/* ===== LIGHTBOX ===== */
.lightbox{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.92);
    z-index:9999;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}

.lightbox-img{
    max-width:90%;
    max-height:80%;
}

.lightbox-caption{
    color:#fff;
    margin-top:12px;
    font-size:15px;
}

.lightbox-close{
    position:absolute;
    top:20px;
    right:30px;
    font-size:36px;
    color:#fff;
    cursor:pointer;
}

.lightbox-prev,
.lightbox-next{
    position:absolute;
    top:50%;
    font-size:40px;
    color:#fff;
    cursor:pointer;
    padding:10px;
    user-select:none;
}
.toyota-card{
    height:100%;
    display:flex;
    flex-direction:column;
}

.toyota-card img{
    max-height:220px;
    object-fit:contain;
    margin-bottom:15px;
}

.toyota-list{
    margin-top:auto;
    padding-bottom:10px;
}

.toyota-list .link{
    margin-top:auto;
}
.lightbox-prev{ left:30px; }
.lightbox-next{ right:30px; }


.video-thumb { position: relative; transition: all 0.3s ease; }
.video-thumb:hover { transform: translateY(-5px); }
.play-btn-overlay {
    position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; opacity: 0.8;
}
.play-icon {
    width: 42px; height: 42px; background: white; border-radius: 50%;
    display: flex; align-items: center; justify-content: center; color: #e53935;
    font-size: 18px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); padding-left: 4px;
}
.video-title {
    font-size: 0.78rem; font-weight: 600; line-height: 1.2; color: #333;
    display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
}
.video-card:hover .video-title { color:#e53935 !important; }

.video-card { height: 165px; display: flex; flex-direction: column; }
.video-card img { height: 105px !important; object-fit: cover; }

.chevron-down {
    width: 14px; height: 14px; border-right: 3px solid #111; border-bottom: 3px solid #111;
    transform: rotate(45deg); margin: 0 auto; cursor: pointer; transition: 0.3s;
}

.warna-scroll {
    display: flex; gap: 12px; overflow-x: auto; padding-bottom: 10px; scroll-behavior: smooth;
}
.warna-scroll::-webkit-scrollbar { height: 6px; }
.warna-scroll::-webkit-scrollbar-thumb { background: #cfcfcf; }

.warna-card { min-width: 200px; background: white; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.1); flex-shrink: 0; }
.warna-card img { width: 100%; height: 130px; object-fit: cover; }
.warna-label { background: #6b7280; color: white; text-align: center; padding: 6px; font-weight: 600; font-size: .8rem; }
</style>


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Logic Toggle Deskripsi
    const arrow = document.getElementById("arrowSpec");
    const desc = document.getElementById("detailDeskripsi");

    if (arrow && desc) {
        arrow.addEventListener("click", function () {
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
            mainVideo.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
});

</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll(".arrow-btn").forEach(function (arrow) {

        arrow.addEventListener("click", function () {

            const targetId = arrow.getAttribute("data-target");
            const desc = document.getElementById(targetId);

            if (!desc) return;

            desc.style.display = "block";   // tampilkan deskripsi
            arrow.style.display = "none";   // panah hilang permanen

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

function showLightbox(){
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
    if(e.target === lightbox){
        lightbox.style.display = 'none';
    }
});
</script>

@endsection
