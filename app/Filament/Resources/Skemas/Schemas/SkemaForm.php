<?php

namespace App\Filament\Resources\Skemas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SkemaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_skema')
                    ->label('Kode Skema')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nama_skema')
                    ->label('Nama Skema')
                    ->required()
                    ->maxLength(255),

                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(4),
            ]);
    }
}