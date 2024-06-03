<?php

namespace App\Filament\Admin\Resources\PaymetResource\Pages;

use App\Filament\Admin\Resources\PaymetResource;
use Filament\Resources\Pages\EditRecord;

class EditPaymet extends EditRecord
{
    protected static string $resource = PaymetResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
