<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel as ModelsArtikel;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class Artikel extends Component
{
    use WithFileUploads;
    public $isTambah = false;
    public $image, $kategoriId, $title, $confirmId, $body;
    public $limitDb = 6;
    public $keyword;

    public function render()
    {
        $artikel = ModelsArtikel::limit($this->limitDb)->orderBy('id', 'desc')->get();
        if ($this->keyword !== null) {
            $artikel = ModelsArtikel::where('title', 'like', '%' . $this->keyword . '%')->get();
        }

        $kategori = Kategori::get();
        return view('livewire.admin.artikel', [
            'kategori' => $kategori,
            'artikel' => $artikel
        ])->extends('layouts.admin')->section('content');
    }

    public function loadMore()
    {
        $this->limitDb += 6;
    }

    public function hapus()
    {
        $artikel = ModelsArtikel::find($this->confirmId);

        $artikel->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil hapus data',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }

    public function hapusNo()
    {
        $this->confirmId = 0;
    }
    public function confirmDelet($id)
    {
        $this->confirmId = $id;
    }
}
