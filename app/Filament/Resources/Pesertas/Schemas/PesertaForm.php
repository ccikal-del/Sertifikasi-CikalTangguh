<?php

namespace App\Filament\Resources\Pesertas\Schemas;

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
                    ->relationship('skema', 'nama_skema')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                TextInput::make('nik')
                ->label('NIK')
                ->required()
                // Hapus baris ->numeric() di sini
                ->length(16)
                ->rule('digits:16')
                ->unique(ignoreRecord: true)
                ->validationMessages([
                    'digits' => 'NIK harus tepat 16 digit.',
                    'unique' => 'NIK sudah terdaftar.',
                ]),

                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(50)
                    ->rule('regex:/^[\pL\s]+$/u')
                    ->validationMessages([
                        'regex' => 'Nama hanya boleh berisi huruf dan spasi.',
                        'max' => 'Nama maksimal 50 karakter.',
                    ]),

                Select::make('gender')
                    ->options(['male' => 'Male', 'female' => 'Female'])
                    ->required(),

                // NO HP
                TextInput::make('no_hp')
                    ->label('No. HP')
                    ->required()
                    ->tel()
                    ->minLength(12)
                    ->maxLength(13)
                    ->validationMessages([
                        'min' => 'No. HP minimal 12 digit.',
                        'max' => 'No. HP maksimal 13 digit.',
                    ]),


                Textarea::make('alamat')
                    ->label('Alamat')


            ])
            ->columns(2);
    }
}
