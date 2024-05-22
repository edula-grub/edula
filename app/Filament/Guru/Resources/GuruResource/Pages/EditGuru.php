<?php

namespace App\Filament\Guru\Resources\GuruResource\Pages;

use App\Filament\Guru\Resources\GuruResource;
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
