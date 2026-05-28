@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">

        {{-- Kolom Kiri (Konten Utama) --}}
        <div class="col-lg-9">

            {{-- Slider Utama --}}
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner shadow-sm">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/C-HR.png') }}" class="d-block w-100" style="height:auto; width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Caldina.png') }}" class="d-block w-100" style="height:auto; width:100%;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Corolla.png') }}" class="d-block w-100" style="height:auto; width:100%;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            {{-- Deskripsi Dealer --}}
            <div class="card mt-0 rounded-0 rounded-bottom shadow-sm">
                <div class="card-body">
                    <h3 style="font-weight:700; color:#333333; font-size:18px; margin-bottom:10px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">TOYOTA SOLO</span>
                    </h3>

                    <ul class="mb-3" style="font-size:1.1rem; list-style:none; padding-left:1.5em;">
                        <li style="color:#000000;" class="bullet-item">Pembelian Tunai atau Kredit</li>
                        <li style="color:#000000;" class="bullet-item">Program Diskon PPnBM Terbaru</li>
                        <li style="color:#000000;" class="bullet-item">Paket Kredit DP Murah 20%</li>
                        <li style="color:#000000;" class="bullet-item">Paket Kredit Cicilan Ringan</li>
                        <li style="color:#000000;" class="bullet-item">Paket Kredit Bunga Rendah</li>
                        <li style="color:#000000;" class="bullet-item">Paket Kredit Tenor Panjang 5 Tahun</li>
                        <li style="color:#000000;" class="bullet-item">Tersedia Berbagai Pilihan Leasing</li>
                        <li style="color:#000000;" class="bullet-item">Bonus Pembelian</li>
                        <li style="color:#000000;" class="bullet-item">Pembelian Bisa Dirumah</li>
                        <li style="color:#000000;" class="bullet-item">Diproses Cepat, Mudah dan Aman</li>
                        <li style="color:#000000;" class="bullet-item">Terima Tukar Tambah Segala Merk</li>
                    </ul>

                    <style>
                        .bullet-item::before {
                            content: "•";
                            color: #33ccff;
                            /* warna bullet */
                            font-weight: bold;
                            display: inline-block;
                            width: 1em;
                            margin-left: -1em;
                        }
                    </style>
                    <div style="color:#789;">
                        Hanya Berlaku Disini Untuk Warga Solo, Boyolali, Sukoharjo, Karanganyar, Wonogiri, Sragen, Jawa Tengah
                    </div>
                </div>
            </div>

            {{-- Bagian Promo Mobil --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:10px;">

                {{-- Header --}}
                <div class="mb-4">
                    <h3 style="font-weight:700; color:#333333; font-size:18px; margin-bottom:10px;">
                        <span style="border-left:3px solid #33ccff; padding-left:7px;">PROMO TOYOTA SOLO</span>
                    </h3>
                    <p style="font-size:16px; color:#555;">
                        Silahkan Pilih Promo Mobil Baru Toyota Dibawah ini Sudah Termasuk
                        Program Promo Pembelian Terbaru pada bulan Februari 2026
                    </p>
                </div>

                {{-- Baris Utama --}}
                <div class="row text-center align-items-stretch">

                    {{-- Corolla Cross --}}
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="w-100 d-flex flex-column text-start">
                            <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                <img src="{{ asset('images/Corolla1.png') }}" class="img-fluid" style="max-height:160px;">
                            </div>
                            <h4 style="color:#33ccff; font-weight:700;">Corolla Cross</h4>
                            <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">536.893.000</b></li>
                                <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">121 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">6 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.corollacross') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                            </ul>
                            <hr class="mt-auto">
                        </div>
                    </div>

                    {{-- Caldina --}}
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="w-100 d-flex flex-column text-start">
                            <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                <img src="{{ asset('images/Caldina1.png') }}" class="img-fluid" style="max-height:160px;">
                            </div>
                            <h4 style="color:#33ccff; font-weight:700;">Caldina</h4>
                            <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">380.585.000</b></li>
                                <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">78 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">5 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.caldina') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                            </ul>
                            <hr class="mt-auto">
                        </div>
                    </div>

                    {{-- C-HR --}}
                    <div class="col-md-4 mb-4 d-flex">
                        <div class="w-100 d-flex flex-column text-start">
                            <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                <img src="{{ asset('images/C-HR1.png') }}" class="img-fluid" style="max-height:160px;">
                            </div>
                            <h4 style="color:#33ccff; font-weight:700;">C-HR</h4>
                            <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">257.033.000</b></li>
                                <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">29 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">2 Jutaan</b></li>
                                <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.chr') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                            </ul>
                            <hr class="mt-auto">
                        </div>
                    </div>

                </div>

                {{-- Tombol --}}
                <div class="text-center mt-3">
                    <button id="btnTampilkan" class="btn btn-light shadow-sm mb-4" style="color:#33ccff; font-weight:bold;">
                        Tampilkan Lainnya
                    </button>

                    {{-- Promo Tambahan --}}
                    <div id="promoLainnya" class="row text-center align-items-stretch" style="display:none;">

                        {{-- New Veloz --}}
                        <div class="col-md-4 mb-4 d-flex">
                            <div class="w-100 d-flex flex-column text-start">
                                <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                    <img src="{{ asset('images/New Veloz.png') }}" class="img-fluid" style="max-height:160px;">
                                </div>
                                <h4 style="color:#33ccff; font-weight:700;">New Veloz</h4>
                                <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                    <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">299.855.000</b></li>
                                    <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">33 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">4 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.corollacross') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                                </ul>
                                <hr class="mt-auto">
                            </div>
                        </div>

                        {{-- New Avanza --}}
                        <div class="col-md-4 mb-4 d-flex">
                            <div class="w-100 d-flex flex-column text-start">
                                <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                    <img src="{{ asset('images/New Avanza.png') }}" class="img-fluid" style="max-height:160px;">
                                </div>
                                <h4 style="color:#33ccff; font-weight:700;">New Avanza</h4>
                                <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                    <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">247.791.000</b></li>
                                    <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">30 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">7 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.corollacross') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                                </ul>
                                <hr class="mt-auto">
                            </div>
                        </div>

                        {{-- New Agya --}}
                        <div class="col-md-4 mb-4 d-flex">
                            <div class="w-100 d-flex flex-column text-start">
                                <div style="height:170px; display:flex; align-items:center; justify-content:center;">
                                    <img src="{{ asset('images/New Agya.png') }}" class="img-fluid" style="max-height:160px;">
                                </div>
                                <h4 style="color:#33ccff; font-weight:700;">New Agya</h4>
                                <ul style="list-style:none; padding-left:0; font-size:15px; flex-grow:1; color:#555;">
                                    <li><span style="color:#33ccff;">•</span> Harga mulai Rp <b style="color:#1a237e;">166.250.000</b></li>
                                    <li><span style="color:#33ccff;">•</span> Kredit mulai Rp <b style="color:#1a237e;">29 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> Cicilan mulai Rp <b style="color:#1a237e;">3 Jutaan</b></li>
                                    <li><span style="color:#33ccff;">•</span> <a href="{{ route('mobil.calya') }}" style="color:#333; text-decoration:none;">Lihat Selengkapnya</a></li>
                                </ul>
                                <hr class="mt-auto">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Bagian Video Blog --}}
            <div class="card mt-2 shadow-sm p-4" style="background:white; border-radius:10px;">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px; font-size:18px;">BLOG VIDEO TOYOTA SOLO</span>
                </h3>
                <p style="font-size:1.15rem; color:#555;">
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

            {{-- Bagian Galeri Foto --}}
            <div class="card mt-2 shadow-sm p-4">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px; font-size:18px;">GALERI FOTO TOYOTA SOLO</span>
                </h3>
                <p style="font-size:1.15rem; color:#555;">
                    Foto Dokumentasi Delivery Penyerahan Mobil Baru Toyota kepada Konsumen di Solo Raya Jawa Tengah
                </p>

                <div class="row mt-2">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar1.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW FORTUNER</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar2.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW INNOVA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar3.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW CALYA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar4.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW RUSH</div>
                        </div>
                    </div>
                </div>

                <div id="galeriLainnya" class="row mt-2" style="display:none;">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar5.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW RUSH</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar6.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW FORTUNER</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar7.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW AVANZA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar8.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW CALYA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar9.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW INNOVA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar10.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW FORTUNER</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar11.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW AVANZA</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/gambar12.png') }}" class="img-fluid w-100" style="height:180px; object-fit:cover;">
                            <div class="w-100 text-center" style="position:absolute; bottom:0; left:0; right:0; background:rgba(0,0,0,0.55); color:white; font-size:0.7rem; font-weight:600; padding:3px 4px; letter-spacing:1px;">NEW VORTUNER</div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-3">
                    <button id="btnGaleri" class="btn btn-light shadow-sm" style="color:#33ccff; font-weight:bold;">
                        Tampilkan Lainnya
                    </button>
                </div>
            </div>

            <script>
                const btnGaleri = document.getElementById('btnGaleri');
                const galeriLainnya = document.getElementById('galeriLainnya');

                btnGaleri.addEventListener('click', function() {
                    if (galeriLainnya.style.display === 'none' || galeriLainnya.style.display === '') {
                        galeriLainnya.style.display = 'flex';
                        galeriLainnya.style.flexWrap = 'wrap';
                        btnGaleri.textContent = 'Sembunyikan';
                    } else {
                        galeriLainnya.style.display = 'none';
                        btnGaleri.textContent = 'Tampilkan Lainnya';
                    }
                });
            </script>

            {{-- Lokasi Dealer --}}
            <div class="card mt-2 shadow-sm p-4">
                <h3 style="font-weight:700; color:#333;">
                    <span style="border-left:3px solid #33ccff; padding-left:7px; font-size:18px;">LOKASI DEALER TOYOTA SOLO</span>
                </h3>
                <p style="font-size:1.15rem; color:#555;">Dealer Resmi Mobil Baru Toyota di Solo Jawa Tengah</p>

                <div class="mt-3" style="font-size:1.1rem;">
                    <h5 class="fw-bold mb-3" style="color:#2c3e50;">ToyotaSolo2000</h5>
                    <div class="row mb-2 border-bottom pb-2">
                        <div class="col-md-3 fw-bold">Telepon</div>
                        <div class="col-md-9 text-muted">0856-0795-1197</div>
                    </div>
                    <div class="row mb-2 border-bottom pb-2">
                        <div class="col-md-3 fw-bold">Alamat</div>
                        <div class="col-md-9 text-muted">Jalan HR Muhammad No.73, Solo, Jawa Tengah 60189 Indonesia</div>
                    </div>
                    <div class="row mb-2 border-bottom pb-2">
                        <div class="col-md-3 fw-bold">Jam Buka</div>
                        <div class="col-md-9 text-muted">07:00 - 19:00 WIB</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 fw-bold">Area Pelayanan</div>
                        <div class="col-md-9 text-muted">Solo, Sidoarjo, Gresik, Mojokerto, Kediri, Malang Jawa Tengah</div>
                    </div>
                </div>
            </div>

        </div> {{-- End col-lg-9 --}}

        {{-- Kolom Kanan (Sidebar Hubungi Kami) --}}
        <div class="col-lg-3">
            <div style="position: sticky; top: 70px; z-index: 1;">
                <div class="text-center" style="background:#1976d2; border-radius:0px 0px 0 0; overflow:hidden;">
                    <div class="py-2" style="font-weight:bold; font-size:1.3rem; color:white;">
                        HUBUNGI KAMI
                    </div>
                    <img src="{{ asset('images/Dealer.jpeg') }}" class="img-fluid" style="width:100%; max-height:270px; object-fit:cover;">
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
        </div> {{-- End col-lg-3 --}}

    </div> {{-- End row --}}

</div> {{-- End container --}}

<style>
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
    document.getElementById("btnTampilkan").addEventListener("click", function() {
        const promo = document.getElementById("promoLainnya");
        promo.style.display = "flex";
        promo.style.flexWrap = "wrap";
        this.style.display = "none";
    });

    document.getElementById("btnGaleri").addEventListener("click", function() {
        const galeri = document.getElementById("galeriLainnya");
        galeri.style.display = "flex";
        galeri.style.flexWrap = "wrap";
        this.style.display = "none";
    });
</script>

@endsection