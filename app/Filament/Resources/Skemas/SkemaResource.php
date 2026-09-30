<?php

namespace App\Filament\Resources\Skemas;

use App\Filament\Resources\Skemas\Pages\CreateSkema;
use App\Filament\Resources\Skemas\Pages\EditSkema;
use App\Filament\Resources\Skemas\Pages\ListSkemas;
use App\Filament\Resources\Skemas\Schemas\SkemaForm;
use App\Filament\Resources\Skemas\Tables\SkemasTable;
use App\Models\Skema;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SkemaResource extends Resource
{
    protected static ?string $model = Skema::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_skema';

    public static function form(Schema $schema): Schema
    {
        return SkemaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SkemasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSkemas::route('/'),
            'create' => CreateSkema::route('/create'),
            'edit' => EditSkema::route('/{record}/edit'),
        ];
    }
}
