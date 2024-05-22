<?php

namespace App\Filament\Admin\Resources\SertifandskilResource\Pages;

use App\Filament\Admin\Resources\SertifandskilResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSertifandskil extends CreateRecord
{
    protected static string $resource = SertifandskilResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
