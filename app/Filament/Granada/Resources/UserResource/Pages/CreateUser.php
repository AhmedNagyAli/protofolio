<?php

namespace App\Filament\Granada\Resources\UserResource\Pages;

use App\Filament\Granada\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
