<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class PelajaranPalingSering extends ChartWidget
{
    protected static ?string $heading = 'Pelajaran Paling Sering';

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
