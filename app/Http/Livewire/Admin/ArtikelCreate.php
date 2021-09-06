<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArtikelCreate extends Component
{
    use WithFileUploads;

    public $photo, $body, $title, $kategoriId;
    public function render()
    {
        $kategori = Kategori::get();
        return view('livewire.admin.artikel-create', [
            'kategori' => $kategori
        ])->extends('layouts.admin')->section('content');
    }

    public function create()
    {
        dd($this->body);
        $thumbnail =  $this->photo->store('public');
        $this->photo = $thumbnail;
        $userId = Auth::user()->id;
        $artikel = Artikel::create([
            'title' => $this->title,
            'user_id' => $userId,
            'thumbnail' => $this->photo,
            'body' => $this->body,
            'kategori_id' => $this->kategoriId,
        ]);
    }
}
