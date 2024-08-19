<?php

namespace App\Filament\Granada\Resources\ServicesResource\Pages;

use App\Filament\Granada\Resources\ServicesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
    protected static string $resource = ServicesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
