<?php

namespace App\Filament\Admin\Resources\PaymethodResource\Pages;

use App\Filament\Admin\Resources\PaymethodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymethods extends ListRecords
{
    protected static string $resource = PaymethodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
