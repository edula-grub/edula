<?php

namespace App\Filament\Admin\Resources\BidchatResource\Pages;

use App\Filament\Admin\Resources\BidchatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBidchats extends ListRecords
{
    protected static string $resource = BidchatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
