<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function afterSave(): void
    {
        $role = $this->form->getState()['role'] ?? null;

        if ($role) {
            $this->record->syncRoles([$role]);
        }

        Notification::make()
            ->title('User berhasil diperbarui.')
            ->success()
            ->send();
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['role'] = $this->record->roles->pluck('name')->first(); // isi role saat edit

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return UserResource::getUrl('index');
    }
}
