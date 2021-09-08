<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'body', 'artikel_id'
    ];

    public function artikel()
    {
        return $this->belongsTo('App\Models\Artikel');
    }

    public function reply()
    {
        return $this->hasMany('App\Models\Reply');
    }
}
