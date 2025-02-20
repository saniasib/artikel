<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    protected function afterCreate(): void
    {
        // Redirect ke halaman daftar user setelah membuat user baru
        $this->redirect(static::getResource()::getUrl('index'));
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        // Optional: Ubah pesan notifikasi jika diperlukan
        return 'User berhasil dibuat!';
    }
}
