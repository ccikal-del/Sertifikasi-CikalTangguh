<?php

namespace App\Filament\Widgets;

use App\Models\Peserta;
use App\Models\Skema;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Peserta', Peserta::count()),

            Stat::make('Skema', Skema::count()),

            Stat::make(
                'Peserta Aktif',
                Peserta::where('status', 'Aktif')->count()
            ),
        ];
    }
}