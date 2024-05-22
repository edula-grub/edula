<?php

namespace App\Filament\Siswa\Resources\SiswaResource\Pages;

use App\Filament\Siswa\Resources\SiswaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSiswa extends CreateRecord
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
