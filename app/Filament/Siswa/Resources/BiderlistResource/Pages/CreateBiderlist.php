<?php

namespace App\Filament\Siswa\Resources\BiderlistResource\Pages;

use App\Filament\Siswa\Resources\BiderlistResource;
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
