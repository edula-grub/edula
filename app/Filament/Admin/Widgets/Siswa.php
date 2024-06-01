<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class Siswa extends ChartWidget
{
    protected static ?string $heading = 'Siswa';

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
