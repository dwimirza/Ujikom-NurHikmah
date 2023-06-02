<?php

namespace App\Filament\Resources\HasilResource\Pages;

use App\Filament\Resources\HasilResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasil extends EditRecord
{
    protected static string $resource = HasilResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
