<?php

namespace App\Filament\Guru\Resources\GuruResource\Pages;

use App\Filament\Guru\Resources\GuruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGurus extends ListRecords
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
