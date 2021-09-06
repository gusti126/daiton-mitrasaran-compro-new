<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use Livewire\Component;

class DetailArtikel extends Component
{
    public $artikel;
    public function mount($slug)
    {
        $this->artikel = Artikel::where('slug', $slug)->first();
    }
    public function render()
    {
        // dd($this->artikel);
        return view('livewire.admin.detail-artikel', [
            'item' => $this->artikel,
        ])->extends('layouts.admin')->section('content');
    }
}
