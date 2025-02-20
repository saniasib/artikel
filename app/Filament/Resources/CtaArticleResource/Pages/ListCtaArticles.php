<?php

namespace App\Filament\Resources\CtaArticleResource\Pages;

use App\Filament\Resources\CtaArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCtaArticles extends ListRecords
{
    protected static string $resource = CtaArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}