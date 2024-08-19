<?php

namespace App\Filament\Granada\Resources;

use App\Filament\Granada\Resources\ServiceImagesResource\Pages;
use App\Filament\Granada\Resources\ServiceImagesResource\RelationManagers;
use App\Models\ServiceImage;
use App\Models\Services;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceImagesResource extends Resource
{
    protected static ?string $model = ServiceImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('service_id')
                        ->label('Service Name')
                        ->options(Services::all()->pluck('title', 'id'))
                        ->searchable(),
                    Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('Services/images')
                    ->disk('public')
                    ->preserveFilenames(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('service.name'),
                Tables\Columns\TextColumn::make('image'),
                
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceImages::route('/'),
            'create' => Pages\CreateServiceImages::route('/create'),
            'edit' => Pages\EditServiceImages::route('/{record}/edit'),
        ];
    }
}
