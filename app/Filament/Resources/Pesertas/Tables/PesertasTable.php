<?php

namespace App\Filament\Resources\Pesertas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PesertasTable
{
    public static function configure(Table $table): Table
    {
        return $table
           
                ->columns([
    TextColumn::make('nis')
        ->searchable(),

    TextColumn::make('nama')
        ->searchable(),

    TextColumn::make('email')
        ->searchable(),
])
            
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
