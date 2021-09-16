<?php

namespace App\Http\Livewire\Front;

use App\Models\Kontak as ModelsKontak;
use Livewire\Component;

class Kontak extends Component
{
    public function render()
    {
        $kontak = ModelsKontak::orderBy('id', 'desc')->first();
        return view('livewire.front.kontak', [
            'item' => $kontak
        ])->extends('layouts.front')->section("content");
    }
}
