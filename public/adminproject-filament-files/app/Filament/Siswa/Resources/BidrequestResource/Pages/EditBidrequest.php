<?php

namespace App\Filament\Siswa\Resources\BidrequestResource\Pages;

use App\Filament\Siswa\Resources\BidrequestResource;
use Filament\Resources\Pages\EditRecord;

class EditBidrequest extends EditRecord
{
    protected static string $resource = BidrequestResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
