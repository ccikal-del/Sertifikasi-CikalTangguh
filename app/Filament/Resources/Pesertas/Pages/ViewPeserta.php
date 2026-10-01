<?php

namespace App\Filament\Resources\Pesertas\Pages;

use App\Filament\Resources\Pesertas\PesertaResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewPeserta extends ViewRecord
{
    protected static string $resource = PesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Kembali')
                ->url(PesertaResource::getUrl('index')),
        ];
    }
}