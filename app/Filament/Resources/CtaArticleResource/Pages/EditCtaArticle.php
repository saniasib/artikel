<?php

namespace App\Filament\Resources\CtaArticleResource\Pages;

use App\Filament\Resources\CtaArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCtaArticle extends EditRecord
{
    protected static string $resource = CtaArticleResource::class;
    protected function afterSave(): void
    {
        $this->redirect(static::getResource()::getUrl('index'));
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        // Optional: Ubah pesan notifikasi jika diperlukan
        return 'Article berhasil diubah!';
    }
}
