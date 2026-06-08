@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #0d47a1, #1976d2);
        font-family: 'Segoe UI', sans-serif;
    }

    .login-container {
        min-height: 100vh;
    }

    .login-card {
        border-radius: 15px;
        overflow: hidden;
    }

    .left-side {
        background: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d') no-repeat center;
        background-size: cover;
        position: relative;
    }

    .left-overlay {
        background: rgba(13, 71, 161, 0.85);
        position: absolute;
        width: 100%;
        height: 100%;
        color: white;
        padding: 40px;
    }

    .left-overlay h2 {
        font-weight: bold;
    }

    .right-side {
        padding: 40px;
        background: #fff;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .btn-login {
        background: #1565c0;
        border-radius: 10px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-login:hover {
        background: #0d47a1;
    }

    .logo {
        width: 70px;
    }
</style>

<div class="container login-container d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-0 login-card" style="max-width: 900px; width:100%;">

        <div class="row g-0">

            <!-- LEFT -->
            <div class="col-md-6 left-side">
                <div class="left-overlay d-flex flex-column justify-content-center">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.png" class="logo mb-4">

                    <h2>Dealer Mobil</h2>
                    <p class="mt-3">
                        Sistem admin untuk mengelola produk mobil, harga, promo,
                        galeri serah terima, dan artikel dealer secara profesional.
                    </p>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-md-6 right-side">

                <h4 class="mb-2" style="color:#1565c0; font-weight:bold;">
                    Login Admin
                </h4>
                <p class="text-muted mb-4">
                    Masuk untuk mengelola data dealer mobil
                </p>

                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Masukkan email admin">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="checkbox"> <small>Ingat saya</small>
                        </div>
                        <a href="#" class="text-primary small">Lupa password?</a>
                    </div>

                    <button type="submit" class="btn btn-login w-100 text-white">
                        Login Sekarang
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection