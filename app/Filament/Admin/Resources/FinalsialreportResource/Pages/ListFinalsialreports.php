<?php

namespace App\Filament\Admin\Resources\FinalsialreportResource\Pages;

use App\Filament\Admin\Resources\FinalsialreportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFinalsialreports extends ListRecords
{
    protected static string $resource = FinalsialreportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
