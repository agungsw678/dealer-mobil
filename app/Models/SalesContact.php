<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'whatsapp',
        'photo',
        'website',
        'social_links',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'social_links' => 'array',
    ];
}
