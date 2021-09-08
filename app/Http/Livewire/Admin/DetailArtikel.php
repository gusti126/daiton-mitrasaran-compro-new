<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailArtikel extends Component
{
    use WithFileUploads;

    public $artikel;
    public $photo1, $photo2;
    public function mount($slug)
    {
        $this->artikel = Artikel::where('slug', $slug)->with('image')->first();
        // dd(strlen($this->artikel->image));
    }
    public function render()
    {
        // dd($this->artikel);
        return view('livewire.admin.detail-artikel', [
            'item' => $this->artikel,
        ])->extends('layouts.admin')->section('content');
    }
    public function uploadImage($id)
    {
        $this->validate([
            'photo1' => 'required|image|max:4000',
            'photo2' => 'required|image|max:4000',
        ]);

        $photosatu = $this->photo1->store('artikel/image', 'public');
        $photodua = $this->photo2->store('artikel/image', 'public');

        $image = Image::create([
            'image' => $photosatu,
            'artikel_id' => $id
        ]);
        $image = Image::create([
            'image' => $photodua,
            'artikel_id' => $id
        ]);
        $this->photo1 = '';
        $this->photo2 = '';
        $this->artikel = Artikel::with('image')->find($id);
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil tambah image',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
}
