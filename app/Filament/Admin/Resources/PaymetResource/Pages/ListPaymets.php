<?php

namespace App\Filament\Admin\Resources\PaymetResource\Pages;

use App\Filament\Admin\Resources\PaymetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymets extends ListRecords
{
    protected static string $resource = PaymetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
