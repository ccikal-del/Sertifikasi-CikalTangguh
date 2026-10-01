<?php

namespace App\Filament\Widgets;

use App\Models\Peserta;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class PesertaTerbaru extends TableWidget
{
    protected static ?string $heading = 'Peserta Terbaru';

    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                fn (): Builder => Peserta::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('nis')
                    ->label('NIS'),

                TextColumn::make('nama')
                    ->label('Nama'),

                TextColumn::make('email')
                    ->label('Email'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge(),
            ]);
    }
}