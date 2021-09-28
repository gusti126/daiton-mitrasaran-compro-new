<?php

namespace App\Http\Livewire\Front;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Komentar;
use Livewire\Component;

class DetailArtikel extends Component
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
        if ($this->artikel->image->count() < 2) {
            $this->isfullImgHeader = true;
        }

        $byKategori = Kategori::where('id', $this->artikel->kategori_id)->with('artikel')->first();
        // dd($byKategori);
        $komentar_t = Komentar::where('artikel_id', $this->artikel->id)->get();
        // dd($komentar_t);
        return view('livewire.front.detail-artikel', [
            'item' => $this->artikel,
            'byKategori' => $byKategori,
            'komentar_t' => $komentar_t
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
