<?php

namespace App\Filament\Guru\Resources\BidrequestResource\Pages;

use App\Filament\Guru\Resources\BidrequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBidrequests extends ListRecords
{
    protected static string $resource = BidrequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
