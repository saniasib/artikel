<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CtaArticleResource\Pages;
use App\Filament\Resources\CtaArticleResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CtaArticleResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    
    protected static ?string $navigationGroup = 'Entertainment Area';
    protected static ?string $navigationLabel = 'Article';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('at_image')
                    ->label('Image'),
                Forms\Components\TextInput::make('at_title')
                    ->label('Title')
                    ->required(),
                Forms\Components\Textarea::make('at_desc')
                    ->label('Description')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('at_image')
                ->label('Image')
                ->disk('public')
                ->url(fn ($record) => asset('storage/' . $record->at_image)), // URL akses langsung
                Tables\Columns\TextColumn::make('at_title')->label('Title')->searchable(),
                Tables\Columns\TextColumn::make('at_desc')->label('Description')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCtaArticles::route('/'),
            'create' => Pages\CreateCtaArticle::route('/create'),
            'edit' => Pages\EditCtaArticle::route('/{record}/edit'),
        ];
    }
}