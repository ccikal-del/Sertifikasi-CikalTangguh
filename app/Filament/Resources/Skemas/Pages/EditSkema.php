<?php

namespace App\Filament\Resources\Skemas\Pages;

use App\Filament\Resources\Skemas\SkemaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSkema extends EditRecord
{
    protected static string $resource = SkemaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
