<?php

namespace App\Http\Livewire\Admin;

use App\Models\Kategori;
use Livewire\Component;

class KategoriLivewire extends Component
{
    public $kategori, $isCreate, $nama, $deletId, $updateId;
    protected $rules = [
        'nama' => 'required|min:3',
    ];
    public function render()
    {
        $this->kategori = Kategori::orderBy('id', 'desc')->get();
        return view('livewire.admin.kategori-livewire', [
            'items' => $this->kategori
        ])->extends('layouts.admin')->section('content');
    }
    public function create()
    {
        $this->isCreate = true;
    }
    public function cancleCreate()
    {
        $this->isCreate = false;
    }
    public function store()
    {
        $this->validate();
        $kategori = Kategori::create([
            'nama' => $this->nama
        ]);
        $this->isCreate = false;
        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil tambah kategori baru',
            'timer' => 4000,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
    public function confirmUpdate($id)
    {

        if ($this->updateId) {
            $this->updateId = 0;
        } else {
            $this->updateId = $id;
            $kategori = Kategori::find($this->updateId);
            $this->nama = $kategori->nama;
        }
    }
    public function update()
    {
        $kategori = Kategori::find($this->updateId);

        $kategori->update([
            'nama' => $this->nama
        ]);

        $this->updateId = 0;

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil update kategori',
            'timer' => 2200,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
    public function confirmDelete($id)
    {
        if ($this->deletId) {
            $this->deletId = 0;
        } else {
            $this->deletId = $id;
        }
    }
    public function hapus()
    {
        $kategori = Kategori::find($this->deletId);
        $kategori->delete();

        $this->dispatchBrowserEvent('swal', [
            'title' => 'Berhasil hapus kategori',
            'timer' => 2200,
            'icon' => 'success',
            'toast' => true,
            'position' => 'top-right',
            'showCancelButton' => false, // There won't be any cancel button
            'showConfirmButton' =>  false // There won't be any confirm button
        ]);
    }
}
