<?php

namespace App\Filament\Guru\Resources\PayMethodResource\Pages;

use App\Filament\Guru\Resources\PayMethodResource;
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
