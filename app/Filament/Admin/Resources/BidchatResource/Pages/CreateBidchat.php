<?php

namespace App\Filament\Admin\Resources\BidchatResource\Pages;

use App\Filament\Admin\Resources\BidchatResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBidchat extends CreateRecord
{
    protected static string $resource = BidchatResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
