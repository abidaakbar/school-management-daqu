<?php

namespace App\Filament\Resources\OsisMemberResource\Pages;

use App\Filament\Resources\OsisMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOsisMembers extends ListRecords
{
    protected static string $resource = OsisMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
