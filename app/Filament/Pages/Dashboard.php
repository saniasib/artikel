<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverviewWidget;
use App\Filament\Widgets\UserStatsWidget;
use App\Filament\Widgets\UserChartWidget;
use App\Filament\Widgets\ArticleChart;
use App\Filament\Widgets\StatesWidget;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $slug = '';
    protected static string $view = 'filament.pages.dashboard';

    protected function getHeaderWidgets(): array
    {
        return [
            // StatsOverviewWidget::class,
            StatesWidget::class,
            // ArticleChart::class,
            // UserStatsWidget::class,
        ];
    }

    // public function getColumns(): int | array
    // {
    //     return [
    //         'default' => 2,
    //         // 'sm' => 2,
    //         // 'lg' => 3,
    //     ];
    // }
}