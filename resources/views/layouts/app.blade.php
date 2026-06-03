<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Toyota Solo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.
    css">
    <style>
        #tabelHarga tbody td {
            padding: 5px 16px !important;
            line-height: 1.3 !important;
            font-size: 13px !important;
        }
        #tabelHarga tbody .item-row td:first-child {
            padding-left: 28px !important;
        }
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .main-content {
            flex: 1 1 auto;
        }
        footer {
            flex-shrink: 0;
            margin-top: auto;
        }
    </style>
</head>

<body>

    @if (!request()->is('admin/login') && !request()->is('admin'))

        @include('partials.navbar')

        <div class="main-content">
            @yield('content')
        </div>

        <footer style="background:#4b545c; color:#d2d6de; padding:10px 0; font-size:1rem;">
            <div class="container-fluid px-4">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-start">
                        <span>© 2026 All Rights Reserved www.toyotasolo.com</span>
                    </div>
                    <div class="col-md-4 text-center text-md-end mt-2 mt-md-0">
                        <span>Designed by
                            <span style="color:#ff4d4d; font-weight:bold;">Politeknik</span>
                            <span style="color:#ffcc00; font-weight:bold;">Negeri</span>
                            <span style="color:#33ccff; font-weight:bold;">Madiun</span>
                        </span>
                    </div>
                </div>
            </div>
        </footer>

    @else

        @yield('content')

    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>