<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutWebmaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_title', 'header_subtitle', 'header_image', 'header_tagline', 'main_satu_title', 'main_satu_subtitle', 'main_satu_image', 'program', 'main_dua_title', 'main_dua_subtitle', 'main_dua_image'
    ];
}
