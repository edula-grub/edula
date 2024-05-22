<?php

namespace App\Filament\Guru\Resources\BiderlistResource\Pages;

use App\Filament\Guru\Resources\BiderlistResource;
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
