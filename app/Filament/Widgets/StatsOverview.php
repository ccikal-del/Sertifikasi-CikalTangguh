<?php

namespace App\Filament\Widgets;

use App\Filament\User\Widgets\DataSaya;
use App\Models\Peserta;
use App\Models\Skema;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class StatsOverview extends StatsOverviewWidget 
{
    protected function getStats(): array
    {
        $user = Auth::user();

    if ($user && method_exists($user, 'hasRole') && ($user->hasRole('admin') || $user->hasRole('super_admin'))) {
            return [
                Stat::make('Total Peserta', Peserta::count())
                    ->description('Jumlah peserta terdaftar'),
                    

                Stat::make('Total Skema', Skema::count())
                    ->description('Jumlah skema sertifikasi')
                   
            ];
        }

        return [

        ];
    }
}
