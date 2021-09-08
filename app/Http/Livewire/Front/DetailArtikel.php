<?php

namespace App\Http\Livewire\Front;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Komentar;
use Livewire\Component;

class DetailArtikel extends Component
{
    public $artikel;
    public $komentar_nama, $komentar_email, $komentar_body;
    public function mount($slug)
    {
        $this->artikel = Artikel::where('slug', $slug)->with(['image' => function ($query) {
            $query->limit(2)->get();
        }])->with('komentar.reply')->first();
    }
    public function render()
    {
        $byKategori = Kategori::where('id', $this->artikel->kategori_id)->with('artikel')->first();
        // dd($byKategori);
        return view('livewire.front.detail-artikel', [
            'item' => $this->artikel,
            'byKategori' => $byKategori
        ])->extends('layouts.front')->section('content');
    }

    public function newKomentar($id)
    {
        Komentar::create([
            'nama' => $this->komentar_nama,
            'email' => $this->komentar_email,
            'body' => $this->komentar_body,
            'artikel_id' => $id
        ]);

        $this->komentar_nama = '';
        $this->komentar_email = '';
        $this->komentar_body = '';
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil kirim komentar',
            'timer' => 4000,
            'icon' => 'success',
        ]);
    }
}
