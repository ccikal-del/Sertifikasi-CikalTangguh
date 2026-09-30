<?php

namespace App\Filament\Resources\Pesertas\Schemas;

use App\Models\Skema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PesertaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('skema_id')
                    ->label('Skema Sertifikasi')
                    ->options(Skema::pluck('nama_skema', 'id'))
                    ->searchable()
                    ->required(),

                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),

                TextInput::make('nis')
                    ->label('NIS')
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                TextInput::make('no_telepon')
                    ->label('No. Telepon')
                    ->required(),

                Textarea::make('alamat')
                    ->label('Alamat')
                    ->required(),

                DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),

                TextInput::make('status')
                    ->label('Status')
                    ->required(),
            ]);
    }
}