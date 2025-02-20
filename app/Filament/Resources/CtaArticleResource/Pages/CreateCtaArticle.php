<?php

namespace App\Filament\Resources\CtaArticleResource\Pages;

use App\Filament\Resources\CtaArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCtaArticle extends CreateRecord
{
    protected static string $resource = CtaArticleResource::class;
    protected function afterCreate(): void
    {
        $this->redirect(static::getResource()::getUrl('index'));
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        // Optional: Ubah pesan notifikasi jika diperlukan
        return 'Article berhasil dibuat!';
    }
}
