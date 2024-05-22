<?php

namespace App\Filament\Guru\Resources\GuruResource\Pages;

use App\Filament\Guru\Resources\GuruResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGuru extends CreateRecord
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
