<?php

namespace App\Http\Livewire\Front;

use App\Models\Artikel;
use App\Models\HomeWebmaster;
use App\Models\Kategori;
use Livewire\Component;

class Index extends Component
{
    public $artikel, $limit = 3;
    public $keyword = '';

    public function mount()
    {
        $allARtikel = Artikel::limit($this->limit)->get();
        $this->artikel = $allARtikel;
    }

    public function render()
    {

        $artikel1 = Artikel::orderBy('id', 'desc')->first();
        $artikel2 = Artikel::orderBy('id', 'desc')->limit(4)->get();
        $byKategori = Kategori::orderBy('id', 'asc')->with('artikel', function ($query) {
            $query->limit(3)->get();
        })->first();

        $webmaster = HomeWebmaster::orderBy('id')->first();

        $countArtikel = Artikel::count();

        return view('livewire.front.index', [
            'satu' => $artikel1,
            'dua' => $artikel2,
            'byKategori' => $byKategori,
            'webmaster' => $webmaster,
            'countArtikel' => $countArtikel
        ])->extends('layouts.front')->section("content");
    }

    public function byKategori($id)
    {
        $kategori = Artikel::where('kategori_id', $id)->limit(1)->get();
        // dd($kategori);
        $this->artikel = $kategori;
    }

    public function loadMore()
    {
        $this->limit += 3;
    }
}
