<?php

namespace App\Filament\Siswa\Resources\PayMethodResource\Pages;

use App\Filament\Siswa\Resources\PayMethodResource;
use Filament\Resources\Pages\EditRecord;

class EditPayMethod extends EditRecord
{
    protected static string $resource = PayMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
