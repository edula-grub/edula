<?php

namespace App\Filament\Admin\Resources\BiderlistResource\Pages;

use App\Filament\Admin\Resources\BiderlistResource;
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
