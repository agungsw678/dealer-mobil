<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Public Routes (Halaman Pengunjung)
|--------------------------------------------------------------------------
*/

// Halaman Utama/Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Promo
Route::get('/promo', function () {
    return view('promo.promo');
})->name('promo');

// Halaman Daftar Harga
Route::get('/daftar-harga', function () {
    $daftarHarga = [
        [
            'nama' => 'NEW AGYA',
            'tipe' => [
                ['nama' => '1.2 G MT', 'harga' => 166250000],
                ['nama' => '1.2 G MT GR SPORT', 'harga' => 172305000],
                ['nama' => '1.2 G AT GR SPORT', 'harga' => 188360000],
            ]
        ],
        [
            'nama' => 'NEW AVANZA',
            'tipe' => [
                ['nama' => '1.3 E MT LUX', 'harga' => 247791000],
                ['nama' => '1.3 E CVT LUX', 'harga' => 262491000],
                ['nama' => '1.5 G MT LUX', 'harga' => 269791000],
                ['nama' => '1.5 G CVT LUX', 'harga' => 284391000],
                ['nama' => '1.5 G CVT with TSS LUX', 'harga' => 310291000],
            ]
        ],
        [
            'nama' => 'NEW VELOZ',
            'tipe' => [
                ['nama' => '1.5 Q CVT LUX', 'harga' => 309900000],
                ['nama' => '1.5 Q CVT with TSS LUX', 'harga' => 335900000],
            ]
        ],
        [
            'nama' => 'NEW RUSH',
            'tipe' => [
                ['nama' => '1.5 G MT LUX', 'harga' => 294300000],
                ['nama' => '1.5 G CVT LUX', 'harga' => 309800000],
                ['nama' => '1.5 S CVT LUX', 'harga' => 324300000],
                ['nama' => '1.5 GR SPORT CVT LUX', 'harga' => 349300000],
            ]
        ],
    ];

    return view('daftar_harga', compact('daftarHarga'));
})->name('daftar.harga');

// Halaman Mobil Baru
Route::get('/mobil-baru', function () {
    return view('mobil_baru');
})->name('mobil.baru');

// Halaman Video (List)
Route::get('/video', function () {
    return view('video');
})->name('video');

// Halaman Detail Video
Route::get('/video/{id}', function ($id) {
    return view('video_detail', ['videoId' => $id]);
})->name('video.detail');

/*
|--------------------------------------------------------------------------
| Halaman Detail Mobil
|--------------------------------------------------------------------------
*/

Route::get('/mobil/raize', function () {
    return view('mobil.raize');
})->name('mobil.raize');

Route::get('/mobil/c-hr', function () {
    return view('mobil.chr');
})->name('mobil.chr');

Route::get('/mobil/corolla-cross', function () {
    return view('mobil.corollacross');
})->name('mobil.corollacross');

Route::get('/mobil/caldina', function () {
    return view('mobil.caldina');
})->name('mobil.caldina');

Route::get('/mobil/calya', function () {
    return view('mobil.new-calya');
})->name('mobil.calya');

Route::get('/mobil/avanza', function () {
    return view('mobil.new-avanza');
})->name('mobil.avanza');

Route::get('/mobil/innova', function () {
    return view('mobil.new-innova');
})->name('mobil.innova');

Route::get('/mobil/venturer', function () {
    return view('mobil.new-venturer');
})->name('mobil.venturer');

Route::get('/mobil/rush', function () {
    return view('mobil.new-rush');
})->name('mobil.rush');

Route::get('/mobil/fortuner', function () {
    return view('mobil.new-fortuner');
})->name('mobil.fortuner');

Route::get('/mobil/veloz', function () {
    return view('mobil.new-veloz');
})->name('mobil.veloz');

Route::get('/mobil/yariz', function () {
    return view('mobil.new-yariz');
})->name('mobil.yariz');

Route::get('/mobil/voxy', function () {
    return view('mobil.new-voxy');
})->name('mobil.voxy');

Route::get('/mobil/sienta', function () {
    return view('mobil.new-sienta');
})->name('mobil.sienta');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

// Login Admin
Route::get('/admin/login', function () {
    if (session('admin_logged_in')) {
        return redirect('/admin');
    }
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'adm@gmail.com' && $password === 'bismillah') {
        session(['admin_logged_in' => true]);
        return redirect('/admin')->with('success', 'Login berhasil!');
    }

    return back()->with('error', 'Email atau password salah');
});

// Logout Admin
Route::get('/admin/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('/admin/login')->with('success', 'Berhasil logout');
})->name('logout');

Route::get('/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('/admin/login')->with('success', 'Berhasil logout');
});

// Dashboard & Halaman Admin (protected)
Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        if (!session('admin_logged_in')) {
            return redirect('/admin/login');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/mobil', [MobilController::class, 'index']);
    Route::get('/promo', [PromoController::class, 'index']);
    Route::get('/user', [UserController::class, 'index']);
});