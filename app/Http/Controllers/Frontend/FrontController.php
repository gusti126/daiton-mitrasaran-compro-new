<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function ArtikelDetail($slug)
    {
        $data = Artikel::where('slug', $slug)->with(['image' => function ($query) {
            $query->limit(2)->get();
        }])->with('komentar.reply')->first();

        return view('front2.detailArtikel', [
            'item' => $data
        ]);
    }
}
