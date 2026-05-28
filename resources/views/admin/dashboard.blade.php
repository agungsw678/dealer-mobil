@extends('admin.layouts.app')

@section('content')
<div class="admin-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="admin-title">Manajemen Produk</h2>
        <a href="#" class="btn btn-primary">+ Tambah Produk</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Toyota Avanza</td>
                <td>Rp 250.000.000</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Toyota Fortuner</td>
                <td>Rp 500.000.000</td>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection