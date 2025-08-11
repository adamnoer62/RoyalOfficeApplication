<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'price', 'features'];

    // Mengkonversi 'features' menjadi array saat diambil dari database
    protected $casts = [
        'features' => 'array',
    ];
}
