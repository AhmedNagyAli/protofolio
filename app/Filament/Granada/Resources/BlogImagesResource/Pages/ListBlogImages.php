<?php

namespace App\Filament\Granada\Resources\BlogImagesResource\Pages;

use App\Filament\Granada\Resources\BlogImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogImages extends ListRecords
{
    protected static string $resource = BlogImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
