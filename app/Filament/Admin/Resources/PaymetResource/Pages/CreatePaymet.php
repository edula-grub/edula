<?php

namespace App\Filament\Admin\Resources\PaymetResource\Pages;

use App\Filament\Admin\Resources\PaymetResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymet extends CreateRecord
{
    protected static string $resource = PaymetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
