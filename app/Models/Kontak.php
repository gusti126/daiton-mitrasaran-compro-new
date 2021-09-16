<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'wa', 'telepon', 'image', 'ic_email', 'ic_wa', 'ic_telepon', 'header_title', 'header_subtitle'
    ];
}
