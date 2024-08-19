<?php

namespace App\Filament\Granada\Resources;

use App\Filament\Granada\Resources\BlogImagesResource\Pages;
use App\Filament\Granada\Resources\BlogImagesResource\RelationManagers;
use App\Models\Blog;
use App\Models\BlogImage;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogImagesResource extends Resource
{
    protected static ?string $model = BlogImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('blog_id')
                        ->label('Blog')
                        ->options(Blog::all()->pluck('title', 'id'))
                        ->searchable(),
                    Forms\Components\FileUpload::make('image')
                    ->image()
                    ->directory('Blogs/images')
                    ->disk('public')
                    ->preserveFilenames(),
                //
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('blog.title'),
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
            'index' => Pages\ListBlogImages::route('/'),
            'create' => Pages\CreateBlogImages::route('/create'),
            'edit' => Pages\EditBlogImages::route('/{record}/edit'),
        ];
    }
}
