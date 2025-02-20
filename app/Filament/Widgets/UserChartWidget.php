<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Statistik User';

    protected function getData(): array
    {
        $data = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Users',
                    'data' => $data->pluck('total')->toArray(),
                    'borderColor' => '#36A2EB',
                    'backgroundColor' => '#36A2EB',
                ]
            ],
            'labels' => $data->pluck('date')->map(fn($date) => Carbon::parse($date)->format('d M'))->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}