<?php

namespace App\Filament\Admin\Resources\BidrequestResource\Pages;

use App\Filament\Admin\Resources\BidrequestResource;
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
