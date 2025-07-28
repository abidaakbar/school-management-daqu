<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah User')
                ->successRedirectUrl(UserResource::getUrl('index')),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            ViewAction::make(),
            EditAction::make(),
            DeleteAction::make(),
        ];
    }


    protected function getTableBulkActions(): array
    {
        return [
            DeleteBulkAction::make(),
        ];
    }
}
