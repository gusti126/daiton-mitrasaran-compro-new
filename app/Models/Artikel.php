<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'thumbnail', 'kategori_id', 'body', 'user_id', 'slug'
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Katgeori');
    }

    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }

    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }
}
