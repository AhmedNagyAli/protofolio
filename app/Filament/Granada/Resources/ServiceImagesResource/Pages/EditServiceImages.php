<?php

namespace App\Filament\Granada\Resources\ServiceImagesResource\Pages;

use App\Filament\Granada\Resources\ServiceImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceImages extends EditRecord
{
    protected static string $resource = ServiceImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
