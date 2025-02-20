<?php

namespace App\Providers;
use Filament\Facades\Filament; // Pastikan namespace ini benar
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Filament\Pages\Dashboard;
use App\Filament\Widgets\UserChartWidget;
use App\Filament\Widgets\ArticleChart;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->pages([
                Dashboard::class,
            ]);
    }
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Filament::registerWidgets([
            UserChartWidget::class,
            ArticleChart::class,
        ]);

        Filament::registerPages([
            Dashboard::class,
        ]);
    }
    protected function getMiddlewares(): array
    {
        return array_merge(parent::getMiddlewares(), [
            'auth', // Pastikan pengguna login
        ]);
    }
}
