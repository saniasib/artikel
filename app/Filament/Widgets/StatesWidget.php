<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Enums\IconPosition;

use App\Models\User;
use App\Models\Child;
use App\Models\Artikel;
use App\Models\Tipstrik;
use App\Models\History;


class StatesWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Article', Artikel::count())
            ->description('Article to be published')
            ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
            ->chart([1,3,5,10,20,40])
            ->color('gray'),
            
            Stat::make('Users', User::count())
            ->description('All users Centing')
            ->descriptionIcon('heroicon-o-user-circle', IconPosition::Before)
            ->chart([1,3,5,10,20,40])
            ->color('info'),
        ];
    }
}