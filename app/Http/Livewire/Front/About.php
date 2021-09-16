<?php

namespace App\Http\Livewire\Front;

use App\Models\AboutWebmaster;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $data = AboutWebmaster::orderBy('id', 'desc')->first();

        return view('livewire.front.about', [
            'item' => $data
        ])->extends('layouts.front')->section('content');
    }
}
