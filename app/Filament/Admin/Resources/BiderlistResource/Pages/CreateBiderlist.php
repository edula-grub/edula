<?php

namespace App\Filament\Admin\Resources\BiderlistResource\Pages;

use App\Filament\Admin\Resources\BiderlistResource;
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
