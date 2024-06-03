<?php

namespace App\Filament\Admin\Resources\PaymethodResource\Pages;

use App\Filament\Admin\Resources\PaymethodResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymethod extends CreateRecord
{
    protected static string $resource = PaymethodResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
