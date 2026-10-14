<?php

namespace App\Filament\User\Pages\Auth;

use App\Models\Peserta;
use App\Models\User;
use Filament\Auth\Pages\Register as BaseRegister;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends BaseRegister
{
    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label('Nama Lengkap')
            ->required()
            ->maxLength(50)
            ->rule('regex:/^[\pL\s]+$/u')
            ->validationMessages([
                'regex' => 'Nama hanya boleh berisi huruf dan spasi.',
            ]);
    }

    protected function handleRegistration(array $data): Model
    {

        $user = parent::handleRegistration($data);

        $user->assignRole('peserta');

        $user->peserta()->create([
            'nama' => $user->name,
        ]);

        return $user;
    }
}