<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\User;
use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;

class Dashboard extends Component
{
    public function render()
    {
        $userC = User::count();
        $artikelC = Artikel::count();
        $adminCount = User::where('role', 'admin')->count();
        $visitorweek = Analytics::fetchMostVisitedPages(Period::days(7));
        // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        dd($visitorweek);
        return view('livewire.admin.dashboard', [
            'user_count' => $userC,
            'artikel_count' => $artikelC,
            'admin_count' => $adminCount
        ])->extends('layouts.admin')->section('content');
    }
}
