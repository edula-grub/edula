<?php

namespace App\Filament\Siswa\Resources\PayMethodResource\Pages;

use App\Filament\Siswa\Resources\PayMethodResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePayMethod extends CreateRecord
{
    protected static string $resource = PayMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
