<?php

namespace App\Filament\Guru\Resources\PayMethodResource\Pages;

use App\Filament\Guru\Resources\PayMethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayMethods extends ListRecords
{
    protected static string $resource = PayMethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
