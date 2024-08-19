<?php

namespace App\Filament\Granada\Resources\ProjectImagesResource\Pages;

use App\Filament\Granada\Resources\ProjectImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectImages extends EditRecord
{
    protected static string $resource = ProjectImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
