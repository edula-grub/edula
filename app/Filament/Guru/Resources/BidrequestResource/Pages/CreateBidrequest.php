<?php

namespace App\Filament\Guru\Resources\BidrequestResource\Pages;

use App\Filament\Guru\Resources\BidrequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBidrequest extends CreateRecord
{
    protected static string $resource = BidrequestResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
