<?php

namespace App\Filament\Guru\Resources\SiswaResource\Pages;

use App\Filament\Guru\Resources\SiswaResource;
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
