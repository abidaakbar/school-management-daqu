<?php

namespace App\Filament\Resources\OsisMemberResource\Pages;

use App\Filament\Resources\OsisMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOsisMember extends EditRecord
{
    protected static string $resource = OsisMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
