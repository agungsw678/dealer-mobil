@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Backend Admin Menu</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><a href="/admin/mobil" class="text-decoration-none">Kelola Mobil</a></li>
                        <li class="list-group-item"><a href="/admin/promo" class="text-decoration-none">Kelola Promo</a></li>
                        <li class="list-group-item"><a href="/admin/user" class="text-decoration-none">Kelola User</a></li>
                    </ul>
                    <form method="POST" action="/admin/logout">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
