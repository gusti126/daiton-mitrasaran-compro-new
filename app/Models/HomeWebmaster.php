<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWebmaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_title', 'header_subtitle', 'alamat', 'kontak', 'email', 'jamkerja'
    ];
}
