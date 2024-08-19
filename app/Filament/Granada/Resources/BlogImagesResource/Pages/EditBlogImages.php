<?php

namespace App\Filament\Granada\Resources\BlogImagesResource\Pages;

use App\Filament\Granada\Resources\BlogImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogImages extends EditRecord
{
    protected static string $resource = BlogImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
