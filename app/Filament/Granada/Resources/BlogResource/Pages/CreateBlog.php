<?php

namespace App\Filament\Granada\Resources\BlogResource\Pages;

use App\Filament\Granada\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
