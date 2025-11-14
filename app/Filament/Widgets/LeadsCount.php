<?php

namespace App\Filament\Widgets;

use App\Plugins\LeadManager\Models\Lead;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class LeadsCount extends ChartWidget
{
    protected static ?string $heading = 'Leads Overview';

    protected function getData(): array
    {
        $leads = Lead::select(
            DB::raw('COUNT(*) as total'),
            DB::raw('MONTH(created_at) as month')
        )
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('total', 'month');

        $months = [
            1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr',
            5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug',
            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'
        ];

        $labels = [];
        $data = [];

        foreach ($months as $num => $name) {
            $labels[] = $name;
            $data[] = $leads[$num] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Leads per Month',
                    'data' => $data,
                    'backgroundColor' => '#3b82f6',
                    'borderColor' => '#1d4ed8',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
