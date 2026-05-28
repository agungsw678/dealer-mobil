@extends('layouts.app')

@section('content')

<div class="container mt-3">
    <div class="row">

        <div class="col-lg-9">

            {{-- Slider --}}
            <div style="max-width: 900px; margin: 0 auto; font-family: sans-serif;">


                {{-- Slider --}}
                <div id="mainSlider" class="carousel slide" data-bs-ride="false"
                    style="border-radius: 0px 0px 0 0; overflow: hidden; margin-bottom: 0;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/daftarharga.png') }}"
                                class="d-block w-100"
                                style="height:auto; width:100%;">
                        </div>
                    </div>
                </div>

                {{-- section daftar harga, sambung langsung ke slider --}}
                <div style="border: 1px solid #dee2e6; border-top: none; border-radius: 0 0 8px 8px; overflow: hidden; background: #fff; margin-bottom: 20px;">

                    <div style="padding: 16px 20px 4px;">
                        <h4 class="fw-bold mb-2" style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            DAFTAR HARGA
                        </h4>
                        <p style="font-size:13px; color:#444; margin:0; line-height:1.7;">
                            Jaminan Daftar Harga Terbaik, Terbaru {{ date('F Y') }} Mobil Toyota Termurah Belum Dikurangi Cashback dari Dealer
                            Resmi Toyota untuk wilayah Surabaya, Sidoarjo, Gresik, Mojokerto, Kediri, Malang Jawa Timur
                            <br>
                            Harga Sudah Dikurangi Program Diskon PPnBM
                        </p>
                    </div>

                    <div style="padding: 10px 20px;">
                        <p style="font-size:13px; margin:0 0 5px; font-weight:bold;">Ketik di bawah ini untuk mencari</p>
                        <input type="text" id="searchHarga" onkeyup="filterHarga()" placeholder=""
                            style="width:100%; padding:8px 12px; border:1px solid #ccc; border-radius:6px; font-size:14px; box-sizing:border-box;">
                    </div>

                    <!-- Tabel -->
                    <table id="tabelHarga" style="width:100%; border-collapse:collapse; font-size:14px; table-layout:fixed;">
                        <colgroup>
                            <col style="width:auto;">
                            <col style="width:140px;">
                        </colgroup>
                        <thead>
                            <tr style="background:#5a6268; color:white;">
                                <th style="padding:12px 20px; text-align:center; letter-spacing:2px; font-weight:600; border-right:1px solid #8a9097;">TIPE</th>
                                <th style="padding:12px 20px; text-align:center; letter-spacing:2px; font-weight:600;">HARGA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($daftarHarga as $group)
                            <tr class="group-row">
                                <td colspan="2" style="font-weight:700; background:#f5f6f7; color:#222; border-top:1px solid #dee2e6; border-bottom:1px solid #dee2e6; letter-spacing:0.5px;">
                                    {{ $group['nama'] }}
                                </td>
                            </tr>
                            @foreach($group['tipe'] as $item)
                            <tr class="item-row" style="border-bottom:1px solid #ebebeb; background:#fff;">
                                <td style="color:#444; text-align:left; border-right:1px solid #dee2e6;">{{ $item['nama'] }}</td>
                                <td style="text-align:right; color:#222; white-space:nowrap;">
                                    <span style="font-size:11px; color:#888; font-weight:400;">Rp </span><strong>{{ number_format($item['harga'], 0, ',', '.') }}</strong>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>

                    {{-- Disclaimer --}}
                    <div style="padding: 14px 20px; border-top: 1px solid #dee2e6;">
                        <p style="font-size:13px; color:#444; margin:0 0 8px; line-height:1.7;">
                            <strong>Disclamer:</strong> Informasi daftar harga diatas merupakan harga mobil baru Toyota yang sudah OTR ( On The Road ) berlaku di Solo Raya Jawa Tengah pada bulan {{ date('F Y') }}. Dapat berubah sewaktu-waktu tanpa pemberitahuan.
                        </p>
                        <p style="font-size:13px; color:#444; margin:0; line-height:1.7;">
                            Kami berusaha menampilkan informasi yang tepat, namun kesalahan dapat terjadi. Apabila terdapat harga yang salah, maka akan segera diinformasikan saat pemesanan sebelum melakukan pembayaran.
                        </p>
                    </div>
                </div>
                {{-- MOBIL TOYOTA LAINNYA --}}
                <div class="card mt-4 shadow-sm" style="border-radius:14px; background:#ffffff;">
                    <div class="card-body" style="padding:26px 28px;">

                        <h3 class="fw-bold mb-2" style="border-left:3px solid #33ccff; padding-left:7px;font-size:18px;">
                            PROMO TOYOTA SOLO
                        </h3>

                        <p class="text-muted">
                            Program Promo Pembelian Mobil Toyota Terbaru pada bulan Mei 2026
                        </p>

                        <div class="row" id="toyotaGrid">

                            {{-- NEW INNOVA --}}
                            <div class="col-md-4 toyota-item">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/innova.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW INNOVA</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 380.585.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">78 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">5 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW FORTUNER --}}
                            <div class="col-md-4 toyota-item">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/fortuner.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW FORTUNER</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 613.487.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">119 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">7 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW VOXY --}}
                            <div class="col-md-4 toyota-item">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/voxy.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW VOXY</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 591.287.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">177 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">10 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW AVANZA --}}
                            <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
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
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW RAIZE --}}
                            <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/NEW RAIZE.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW RAIZE</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 257.033.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">29 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">2 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW YARIS --}}
                            <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/NEW YARIS.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW YARIS</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 295.939.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">59 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">4 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW VELOZ --}}
                            <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/VELOZ.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW VELOZ</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 299.855.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">33 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">3 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- NEW RUSH --}}
                            <div class="col-md-4 toyota-item toyota-hidden" style="display:none;">
                                <div class="toyota-card" style="border:none; padding-bottom:16px;">
                                    <div class="text-center">
                                        <img src="{{ asset('images/rush.png') }}" class="img-fluid mb-2" style="height:140px; object-fit:contain;">
                                    </div>
                                    <h5 class="toyota-title">NEW RUSH</h5>
                                    <ul class="toyota-list">
                                        <li>
                                            <span>Harga mulai</span>
                                            <strong class="price">Rp 331.733.000</strong>
                                        </li>
                                        <li>
                                            <span>Kredit mulai</span>
                                            <strong class="kredit">59 Jutaan</strong>
                                        </li>
                                        <li>
                                            <span>Cicilan mulai</span>
                                            <strong class="cicilan">4 Jutaan</strong>
                                        </li>
                                        <li class="link">
                                            <a href="#">Lihat Selengkapnya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        {{-- Separator --}}
                        <hr style="border:none; border-top:1px solid #e5e7eb; margin:10px 0 16px;">

                        {{-- Tombol Tampilkan Lainnya --}}
                        <div style="text-align:center;">
                            <button id="btnTampilkanLainnya" onclick="tampilkanLainnya()" class="btn btn-light shadow-sm mb-4" style="color:#33ccff; font-weight:bold;">
                                Tampilkan Lainnya
                            </button>
                        </div>
                    </div>
                </div>

                <script>
                    function tampilkanLainnya() {
                        document.querySelectorAll('.toyota-hidden').forEach(el => {
                            el.style.display = '';
                        });
                        document.getElementById('btnTampilkanLainnya').style.display = 'none';
                    }
                </script>


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

        .spec-text,
        .spec-subtitle,
        .spec-list {
            font-size: 1.08rem;
            color: #374151;
        }

        .spec-text {
            line-height: 1.6;
            margin-bottom: 14px;
        }

        .spec-subtitle {
            font-weight: 500;
            margin-bottom: 6px;
        }

        .spec-list {
            padding-left: 22px;
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

        .spec-arrow {
            display: flex;
            justify-content: center;
            margin-top: 14px;
            cursor: pointer;
        }

        .spec-arrow span {
            width: 18px;
            height: 18px;
            border-right: 3px solid #374151;
            border-bottom: 3px solid #374151;
            transform: rotate(45deg);
        }

        /* CARD MOBIL */
        .toyota-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .toyota-card img {
            display: block;
            margin: 0 auto 15px;
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
            margin-top: auto;
            margin-bottom: 16px;
            padding-bottom: 12px;
            border-bottom: 2px solid #e5e7eb;
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

        .toyota-list .link {
            margin-top: auto;
        }

        .toyota-list .link a {
            color: #374151;
            font-weight: 500;
            text-decoration: none;
        }

        .toyota-list .link a:hover {
            text-decoration: underline;
        }

        /* GALERI WARNA */
        .warna-scroll {
            display: flex;
            gap: 12px;
            overflow-x: auto;
            padding: 10px 0;
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
            flex-shrink: 0;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
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

        /* LIGHTBOX */
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

        /* VIDEO */
        .video-card {
            height: 165px;
            display: flex;
            flex-direction: column;
        }

        .video-card img {
            height: 105px !important;
            object-fit: cover;
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
            inset: 0;
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

        #tabelHarga td {
            padding: 5px 16px !important;
            line-height: 1.3 !important;
            font-size: 13px !important;
        }

        #tabelHarga .item-row td:first-child {
            padding-left: 28px !important;
        }

        #tabelHarga .group-row td {
            padding: 5px 16px !important;
            font-size: 12.5px !important;
        }
    </style>
    <script>
        function filterHarga() {
            const keyword = document.getElementById('searchHarga').value.toLowerCase();
            const rows = document.querySelectorAll('#tabelHarga .item-row');
            rows.forEach(row => {
                row.style.display = row.innerText.toLowerCase().includes(keyword) ? '' : 'none';
            });
            document.querySelectorAll('#tabelHarga .group-row').forEach(group => {
                const sibs = [];
                let el = group.nextElementSibling;
                while (el && el.classList.contains('item-row')) {
                    sibs.push(el);
                    el = el.nextElementSibling;
                }
                const anyVisible = sibs.some(s => s.style.display !== 'none');
                group.style.display = anyVisible ? '' : 'none';
            });
        }
    </script>
    @endsection