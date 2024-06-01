<?php

namespace App\Filament\Admin\Resources\BidchatResource\Pages;

use App\Filament\Admin\Resources\BidchatResource;
use Filament\Resources\Pages\EditRecord;

class EditBidchat extends EditRecord
{
    protected static string $resource = BidchatResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
