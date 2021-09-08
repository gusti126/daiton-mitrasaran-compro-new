<?php

namespace App\Http\Livewire\Admin;

use App\Models\Pesan as ModelsPesan;
use Livewire\Component;

class Pesan extends Component
{
    public function render()
    {
        $data = ModelsPesan::get();
        return view('livewire.admin.pesan', [
            'items' => $data
        ])->extends('layouts.admin')->section('content');
    }
}
