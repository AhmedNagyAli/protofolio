<?php

namespace App\Filament\Granada\Resources\ProjectImagesResource\Pages;

use App\Filament\Granada\Resources\ProjectImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProjectImages extends ListRecords
{
    protected static string $resource = ProjectImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
