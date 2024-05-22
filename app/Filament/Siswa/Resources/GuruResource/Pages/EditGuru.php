<?php

namespace App\Filament\Siswa\Resources\GuruResource\Pages;

use App\Filament\Siswa\Resources\GuruResource;
use Filament\Resources\Pages\EditRecord;

class EditGuru extends EditRecord
{
    protected static string $resource = GuruResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
