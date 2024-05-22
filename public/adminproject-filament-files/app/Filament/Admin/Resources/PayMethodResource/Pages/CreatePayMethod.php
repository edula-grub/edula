<?php

namespace App\Filament\Admin\Resources\PayMethodResource\Pages;

use App\Filament\Admin\Resources\PayMethodResource;
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
