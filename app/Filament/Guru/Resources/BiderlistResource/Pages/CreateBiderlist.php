<?php

namespace App\Filament\Guru\Resources\BiderlistResource\Pages;

use App\Filament\Guru\Resources\BiderlistResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBiderlist extends CreateRecord
{
    protected static string $resource = BiderlistResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
