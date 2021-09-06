<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\Kategori;
use Livewire\Component;

class ArtikelEdit extends Component
{
    public $item;
    public function mount($slug)
    {
        $this->item = Artikel::where('slug', $slug)->first();
    }
    public function render()
    {
        $kategori = Kategori::get();
        return view('livewire.admin.artikel-edit', [
            'kategori' => $kategori,
            'item' => $this->item
        ])->extends('layouts.admin')->section('content');
    }
}
