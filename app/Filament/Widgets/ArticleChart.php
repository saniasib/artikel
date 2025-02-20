<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Artikel; // Ganti dengan nama model artikel Anda jika berbeda
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ArticleChart extends ChartWidget
{
    protected static ?string $heading = ' Article Chart';

    protected function getData(): array
    {
        $data = Artikel::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Article',
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
