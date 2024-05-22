<?php

namespace App\Filament\Guru\Resources\BiderlistResource\Pages;

use App\Filament\Guru\Resources\BiderlistResource;
use Filament\Resources\Pages\EditRecord;

class EditBiderlist extends EditRecord
{
    protected static string $resource = BiderlistResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
