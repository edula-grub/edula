<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class PenggunaanHarian extends ChartWidget
{
    protected static ?string $heading = 'Penggunaan Harian';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
