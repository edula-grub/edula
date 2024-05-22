<?php

namespace App\Filament\Admin\Resources\BiderlistResource\Pages;

use App\Filament\Admin\Resources\BiderlistResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiderlists extends ListRecords
{
    protected static string $resource = BiderlistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
