<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $userC = User::count();
        $artikelC = Artikel::count();
        $adminCount = User::where('role', 'admin')->count();
        return view('livewire.admin.dashboard', [
            'user_count' => $userC,
            'artikel_count' => $artikelC,
            'admin_count' => $adminCount
        ])->extends('layouts.admin')->section('content');
    }
}
