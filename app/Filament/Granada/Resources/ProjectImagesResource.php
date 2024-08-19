<?php

namespace App\Filament\Granada\Resources;

use App\Filament\Granada\Resources\ProjectImagesResource\Pages;
use App\Filament\Granada\Resources\ProjectImagesResource\RelationManagers;
use App\Models\Project;
use App\Models\ProjectImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectImagesResource extends Resource
{
    protected static ?string $model = ProjectImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 
                    Select::make('project_id')
                        ->label('Project')
                        ->options(Project::all()->pluck('name', 'id'))
                        ->searchable(),
                    Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('projects/images')
                    ->disk('public')
                    ->preserveFilenames(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project.name'),
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
            'index' => Pages\ListProjectImages::route('/'),
            'create' => Pages\CreateProjectImages::route('/create'),
            'edit' => Pages\EditProjectImages::route('/{record}/edit'),
        ];
    }
}
