<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel;
use App\Models\User;
use Livewire\Component;
use Analytics;
use Illuminate\Support\Carbon;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use App\Models\Expense;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\LineChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;
use Spatie\Analytics\Period;

class Dashboard extends Component
{
    public function render()
    {
        $userC = User::count();
        $artikelC = Artikel::count();
        $adminCount = User::where('role', 'admin')->count();
        $visitorweek = Analytics::fetchMostVisitedPages(Period::days(7));
        // dd($visitorweek);

        $columnChartModel = (new ColumnChartModel())
            ->setTitle('Paling Banyak di Kunjungi');
        $pieChart = (new PieChartModel())
            ->setTitle('Paling sering di kunjungi');
        foreach ($visitorweek as $visitor) {
            $columnChartModel->addColumn($visitor['url'], $visitor['pageViews'], '#' . $this->random_color());
            $pieChart->addSlice($visitor['url'], $visitor['pageViews'], '#' . $this->random_color());
        }
        // last periode
        $periode1End   = Carbon::now();
        $periode1Start = Carbon::now()->subDays(6);
        // periode 2
        $periode2End   = Carbon::now()->subDays(7);
        $periode2Start = Carbon::now()->subDays(13);
        // periode 3
        $periode3End   = Carbon::now()->subDays(14);
        $periode3Start = Carbon::now()->subDays(20);
        // periode 3
        $periode4End   = Carbon::now()->subDays(21);
        $periode4Start = Carbon::now()->subDays(27);

        $analyticsEmpat = Analytics::fetchTotalVisitorsAndPageViews(Period::create($periode1Start, $periode1End));
        $analyticsTiga  = Analytics::fetchTotalVisitorsAndPageViews(Period::create($periode2Start, $periode2End));
        $analyticsDua   = Analytics::fetchTotalVisitorsAndPageViews(Period::create($periode3Start, $periode3End));
        $analyticsSatu  = Analytics::fetchTotalVisitorsAndPageViews(Period::create($periode4Start, $periode4End));

        $total_satu  = 0;
        $total_dua   = 0;
        $total_tiga  = 0;
        $total_empat = 0;

        foreach ($analyticsSatu as $value) {
            $total_satu += $value['pageViews'];
        }

        foreach ($analyticsDua as $value) {
            $total_dua += $value['pageViews'];
        }

        foreach ($analyticsTiga as $value) {
            $total_tiga += $value['pageViews'];
        }

        foreach ($analyticsEmpat as $value) {
            $total_empat += $value['pageViews'];
        }

        // dd($total_dua);


        $lineChart = (new LineChartModel())->singleLine()
            ->setTitle('Statistics Visitors')
            ->addPoint('satu minggu', $total_satu)
            ->addPoint('dua minggu', $total_dua)
            ->addPoint('tiga minggu', $total_tiga)
            ->addPoint('empat minggu', $total_empat);

        return view('livewire.admin.dashboard', [
            'user_count' => $userC,
            'artikel_count' => $artikelC,
            'admin_count' => $adminCount,
            'analiticWeek' => $visitorweek,

        ])->extends('layouts.admin')->section('content')->with([
            'columnChartModel' => $columnChartModel,
            'pieChart' => $pieChart,
            'lineChart' => $lineChart
        ]);
    }
    function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    function random_color()
    {
        return $this->random_color_part() . $this->random_color_part() . $this->random_color_part();
    }
}
