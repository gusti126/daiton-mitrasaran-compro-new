<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\Image;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailArtikel extends Component
{
    use WithFileUploads;

    public $artikel, $slug;
    public $photo1, $photo2;
    public $komenId, $balasan;

    protected $listeners = [
        'eventBalasan',
    ];

    public function eventBalasan()
    {
        $this->artikel =
            Artikel::where('slug', $this->slug)->with('image', 'komentar.reply')->first();;
    }

    public function mount($slug)
    {
        $this->artikel = Artikel::where('slug', $slug)->with('image', 'komentar.reply')->first();
        // dd($this->artikel);
        $this->slug = $slug;
    }
    public function render()
    {
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
    public function confirmBalasan($id)
    {
        $this->komenId = $id;
    }
    public function createBalasan()
    {
        $data = Reply::create([
            'komentar_id' => $this->komenId,
            'user_id' => Auth::user()->id,
            'body' => $this->balasan
        ]);

        $this->komenId = 0;
        $this->emit('eventBalasan');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil balas komentar',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
    public function deleteBalasan($id)
    {
        $data = Reply::find($id);
        $data->delete();

        $this->emit('eventBalasan');

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil hapus balasan komentar',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
}
