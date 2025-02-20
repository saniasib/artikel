<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function rules(): array
    {
        return [
            'password' => ['nullable', 'min:8', 'confirmed'], // Validasi password
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            
        ];
    }
    protected function afterSave(): void
    {
        // Redirect ke halaman daftar user
        $this->redirect(static::getResource()::getUrl('index'));
    }
    protected function getCreatedNotificationMessage(): ?string
    {
        // Optional: Ubah pesan notifikasi jika diperlukan
        return 'User berhasil diubah!';
    }
}
