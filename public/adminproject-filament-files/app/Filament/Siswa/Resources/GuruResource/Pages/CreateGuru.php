<?php

namespace App\Filament\Siswa\Resources\GuruResource\Pages;

use App\Filament\Siswa\Resources\GuruResource;
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
