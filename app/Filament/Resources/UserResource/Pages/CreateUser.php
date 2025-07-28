<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function afterCreate(): void
    {
        $role = $this->form->getState()['role'] ?? null;

        if ($role) {
            $this->record->syncRoles([$role]);
        }

        Notification::make()
            ->title('User berhasil dibuat.')
            ->success()
            ->send();
    }

    protected function getRedirectUrl(): string
    {
        return UserResource::getUrl('index');
    }
}
