<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dealer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background: #f6f9fc;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .admin-sidebar {
            background: linear-gradient(180deg, #1565c0 0%, #2196f3 100%);
            color: #fff;
            min-height: 100vh;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            padding: 24px 0 0 0;
        }
        .admin-sidebar .logo {
            text-align: center;
            margin-bottom: 32px;
        }
        .admin-sidebar .logo img {
            width: 48px;
            height: 48px;
        }
        .admin-sidebar .title {
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 8px;
        }
        .admin-sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .admin-sidebar ul li {
            margin-bottom: 8px;
        }
        .admin-sidebar ul li a {
            display: block;
            color: #fff;
            padding: 12px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        .admin-sidebar ul li a.active, .admin-sidebar ul li a:hover {
            background: #1976d2;
        }
        .admin-sidebar .logout {
            margin-top: auto;
            padding: 24px 32px;
        }
        .admin-sidebar .logout a {
            color: #ffd600;
            font-weight: bold;
            text-decoration: none;
        }
        .admin-content {
            margin-left: 250px;
            padding: 40px 40px 0 40px;
        }
        .admin-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            padding: 32px;
            margin-bottom: 32px;
        }
        .admin-title {
            color: #1565c0;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 24px;
        }
        .btn-primary {
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .btn-primary:hover {
            background: #1565c0;
        }
        .btn-warning {
            background: #ffc107;
            color: #212121;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 600;
            margin-right: 8px;
        }
        .btn-danger {
            background: #e53935;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 600;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 14px 12px;
            text-align: left;
        }
        th {
            color: #1565c0;
            font-weight: bold;
            background: #f6f9fc;
        }
        tr:nth-child(even) {
            background: #f6f9fc;
        }
    </style>
    @yield('head')
</head>
<body>
    <div class="admin-sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
            <div class="title">Admin Dealer</div>
        </div>
        <ul>
            <li><a href="/admin/produk">Produk</a></li>
            <li><a href="/admin/harga">Harga</a></li>
            <li><a href="/admin/promo">Promo</a></li>
            <li><a href="/admin/galeri">Galeri Serah Terima</a></li>
            <li><a href="/admin/artikel">Artikel</a></li>
        </ul>
        <div class="logout">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </div>
    <div class="admin-content">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
