<?php

namespace App\Filament\Granada\Resources\ServicesResource\Pages;

use App\Filament\Granada\Resources\ServicesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServices extends EditRecord
{
    protected static string $resource = ServicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
