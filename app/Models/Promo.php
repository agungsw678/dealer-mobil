<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
    'nama_mobil',
    'harga',
    'kredit',
    'cicilan',
    'gambar',
    'deskripsi'
];
}
