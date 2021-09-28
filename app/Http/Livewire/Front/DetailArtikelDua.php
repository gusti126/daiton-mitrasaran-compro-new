<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class DetailArtikelDua extends Component
{
    public $artikel, $slug;
    public $komentar_nama, $komentar_email, $komentar_body, $isfullImgHeader;
    public function mount($slug)
    {
        $this->slug = $slug;
        // $this->artikel = Artikel::where('slug', $this->slug)->with(['image' => function ($query) {
        //     $query->limit(2)->get();
        // }])->with('komentar')->first();
        // dd($this->artikel->komentar);
        // if ($this->artikel->image->count() < 2) {
        //     $this->isfullImgHeader = true;
        // }
        $this->artikel = Artikel::where('slug', $slug)->with('image', 'komentar.reply')->first();
    }
    public function render()
    {
        return view('livewire.front.detail-artikel-dua');
    }
}
