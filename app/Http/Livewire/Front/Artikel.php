<?php

namespace App\Http\Livewire\Front;

use App\Models\Artikel as ModelsArtikel;
use App\Models\Kategori;
use Livewire\Component;

class Artikel extends Component
{
    public $artikel, $limit = 4;
    public $keyword = '';
    public $maxArtikel = false;


    public function render()
    {
        $kategori = Kategori::get();

        $datahead =
            ModelsArtikel::orderBy('id', 'desc')->limit(4)->first();

        if ($this->keyword) {
            $this->artikel = ModelsArtikel::where('title', 'like', "%" . $this->keyword . "%")->get();
        }
        if (strlen($this->keyword) < 3) {
            $allARtikel = ModelsArtikel::limit($this->limit)->get();
            $this->artikel = $allARtikel;
        }

        return view('livewire.front.artikel', [
            'datahead' => $datahead,
            'artikel' => $this->artikel,
            'kategoriAll' => $kategori,
        ])->extends('layouts.front')->section('content');
    }
    public function loadMore()
    {
        $this->limit += 3;
        $artikelC = ModelsArtikel::count();
        if ($this->limit == $artikelC) {
            $this->maxArtikel = true;
        }
    }
}
