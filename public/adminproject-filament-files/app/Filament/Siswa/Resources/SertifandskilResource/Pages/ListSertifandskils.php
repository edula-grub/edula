<?php

namespace App\Filament\Siswa\Resources\SertifandskilResource\Pages;

use App\Filament\Siswa\Resources\SertifandskilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSertifandskils extends ListRecords
{
    protected static string $resource = SertifandskilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
