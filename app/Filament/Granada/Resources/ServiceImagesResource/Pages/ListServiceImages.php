<?php

namespace App\Filament\Granada\Resources\ServiceImagesResource\Pages;

use App\Filament\Granada\Resources\ServiceImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceImages extends ListRecords
{
    protected static string $resource = ServiceImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
